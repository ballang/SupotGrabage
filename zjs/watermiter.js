/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var table_person_add = null;
var table = null;
$(document).ready(function () {
    /*loadInit();*/
    $('#tb-person-add tbody').on('click', 'tr', function () {
        var data = table_person_add.row(this).data();
        console.log(data);
        $("#ps_code_add").text(data['ps_code']);
        $("#ps_name_add").val(data['ps_name']);
        $("#md-person-add").modal("hide");
        loadMiterID();
    });
    loadZone();


    $('#md-create').on('shown.bs.modal', function () {
        var my = $("#munit_month").val() + "/" + $("#munit_year").val();
        $("#munit_month_munit_year").val(my);
        $("#add-z_code").val($("#z_code").val() + "/" + $("#z_code :selected").text());
    });

    $('#md-person-add').on('shown.bs.modal', function () {
        if (table_person_add != null) {
            table_person_add.destroy();
        }
        $.ajax({
            url: "php/api/person.php?=" + Math.random(),
            type: 'POST',
            data: {
                'cm': 'load',
            },
            success: function (data, textStatus, jqXHR) {
                var json = JSON.parse(data);
                table_person_add = $('#tb-person-add').DataTable({
                    "searching": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bInfo": false,
                    "bAutoWidth": false,
                    "data": json['data'],
                    "columns": [
                        /* {"data": null, "bSortable": false, "render": function (data, type, row, meta) {
                         return meta.row + meta.settings._iDisplayStart + 1;
                         }},*/
                        {"data": "ps_code"},
                        {"data": "ps_name"},
                    ],
                });

                $(".dataTables_filter").hide();
            }
        });
    });
});
function loadZone() {
    $("#z_code").prop("disabled", true);
    $.ajax({
        url: "php/api/miter_zone.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'load'
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            $("#z_code").prop("disabled", false);
            $("#z_code").empty();
            for (var i = 0; i < json['data'].length; i++) {
                $("#z_code").append("<option value='" + json['data'][i]['z_code'] + "'>" + json['data'][i]['z_desc'] + "</option>");
            }

            loadData();
        }
    });
}

function loadData() {
    if (table != null) {
        table.destroy();
    }
    $('#tb-data>tbody>tr').empty();
    $.ajax({
        url: "php/api/miter_unit.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'load2',
            'munit_month': $("#munit_month").val(),
            'munit_year': $("#munit_year").val(),
            'z_code': $("#z_code").val()
        },
        success: function (data, textStatus, jqXHR) {
            //console.log(data);
            var json = JSON.parse(data);
            console.log(json);


            table = $('#tb-data').DataTable({
                "searching": true,
                "bLengthChange": false,
                "bFilter": false,
                "bInfo": false,
                "bAutoWidth": false,
                "data": json['data'],
                "columns": [
                    /* {"data": null, "bSortable": false, "render": function (data, type, row, meta) {
                     return meta.row + meta.settings._iDisplayStart + 1;
                     }},*/
                    {"data": "munit_number"},
                    {"data": "ps_name"},
                    {"data": "period"},
                    {"data": "befor_unit"},
                    {"data": "after_unit"},
                    {"data": "use_unit"},
                    {"data": "is_garbage"},
                    {
                        "data": null,
                        "bSortable": false,
                        "mRender": function (o) {
                            var html = "<div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Basic example\">";
                            html += " <button    type=\"button\" onclick=\"del('" + o.munit_number + "')\" class=\"btn btn-sm btn-danger\" ><i class=\"fas fa-trash\"></i></button>";
                            html += "  <button type=\"button\"  onclick=\"openEdit('" + o.munit_number + "')\" class=\"btn btn-sm btn-warning\"><i class=\"fas fa-pencil-alt\"></i></button>";
                            html += "</div>";
                            return html;
                        }
                    }
                ],
            });

            $(".dataTables_filter").hide();




        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown.toString());
        }
    });
}



function del(munit_number) {
    swal({
        title: "ยืนยันการลบข้อมูล ?",
        text: "ลบข้อมูลการจดมิเตอร์น้ำ",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "ลบข้อมูล",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

            $.ajax({
                url: "php/api/miter_unit.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'del',
                    'munit_number': munit_number,
                },
                success: function (data, textStatus, jqXHR) {
                    var json = JSON.parse(data);
                    if (json['status'] == '1') {
                        MESSAGE_SUCCESS(json['message']);
                        loadData();
                    } else {
                        MESSAGE_ERROR(json['message']);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(errorThrown.toString());
                }
            });

        }, TIME_OUT)
    });
}



function zoneChange() {
    $("#ps_code").text("");
    $("#ps_name").val("");
    loadMiterID();
}
function loadInit() {
    $("#col-munit_number").hide();

    if (table_person != null) {
        table_person.destroy();
    }
    $.ajax({
        url: "php/api/miter_unit.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'init'
        },
        success: function (data, textStatus, jqXHR) {
            $("#z_code").empty();
            console.log(data);
            var json = JSON.parse(data);
            for (var i = 0; i < json['zone'].length; i++) {
                $("#z_code").append("<option value='" + json['zone'][i]['z_code'] + "'>" + json['zone'][i]['z_desc'] + "</option>");
            }

            table_person = $('#tb-person').DataTable({
                "searching": true,
                "bLengthChange": false,
                "bFilter": false,
                "bInfo": false,
                "bAutoWidth": false,
                "data": json['person'],
                "columns": [
                    /* {"data": null, "bSortable": false, "render": function (data, type, row, meta) {
                     return meta.row + meta.settings._iDisplayStart + 1;
                     }},*/
                    {"data": "ps_code"},
                    {"data": "ps_name"},
                ],
            });
            $(".dataTables_filter").hide();
            $("#ps_code").text("");
            $("#ps_name").val("");
            $("#crr_unit").val("");

            loadMiterID();

        }


    });
}

function loadMiterID() {
    $("#mt_id").prop("disabled", true);

    console.log($("#ps_code").text());
    console.log($("#z_code").val());


    $.ajax({
        url: "php/api/miter_water.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'read-zone',
            "ps_code": $("#ps_code_add").text(),
            "z_code": $("#z_code").val(),
        },
        success: function (data, textStatus, jqXHR) {
            $("#mt_id").empty();
            console.log(data);
            var json = JSON.parse(data);
            for (var i = 0; i < json['data'].length; i++) {
                $("#mt_id").append("<option value='" + json['data'][i]['mt_id'] + "'>" + json['data'][i]['mt_id'] + "</option>");
            }

            $("#mt_id").prop("disabled", false);
            readMiterData();
        }
    });

}

function readMiterData() {

    $("#col-munit_number").hide();
    $("#crr_unit").val("");
    $("#after_unit").val("");
    $("#use_unit").val("");
    $("#is_garbage").prop("checked", false);
    $("#house_id").val("");
    $("#addr_desc").val("");
    //$("#lat").val("");
    //$("#lng").val("");
    $.ajax({
        url: "php/api/miter_unit.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'read-miter',
            'mt_id': $("#mt_id").val(),
            "munit_month": $("#munit_month").val(),
            "munit_year": $("#munit_year").val(),
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            console.log(json);

            $("#crr_unit").val(json['data']['crr_unit']);
            $("#after_unit").val("");
            $("#use_unit").val("");
            if (json['data']['is_garbage'] == '1') {
                $("#is_garbage").prop("checked", true);
            } else {
                $("#is_garbage").prop("checked", false);
            }

            $("#house_id").val(json['data']['house_id']);
            $("#addr_desc").val(json['data']['addr_desc']);
            //$("#lat").val(json['data']['lat']);
            //$("#lng").val(json['data']['lng']);
            console.log(json['data-unit']);

            if (json['data-unit']['munit_number'].length > 0) {
                $("#after_unit").val(json['data-unit']['after_unit']);
                $("#use_unit").val(json['data-unit']['use_unit']);
                //$("#lat").val(json['data-unit']['write_lat']);
                //$("#lng").val(json['data-unit']['write_lng']);
                //$("#munit_month").prop("disabled", true);
                // $("#munit_year").prop("disabled", true);
                //alert(json['data-unit']['munit_number']);
                $("#col-munit_number").show();
                $("#munit_number").val(json['data-unit']['munit_number']);

            } else {
                //$("#munit_month").prop("disabled", false);
                //$("#munit_year").prop("disabled", false);
            }
        }
    });
}

function cal_unit() {
    if ($("#crr_unit").val().length > 0 && $("#after_unit").val().length > 0) {
        if (IS_NUMBER($("#crr_unit").val()) == true && IS_NUMBER($("#after_unit").val())) {
            var crr_unit = parseInt($("#crr_unit").val());
            var after_unit = parseInt($("#after_unit").val());
            var use_unit = 0;
            console.log("cal_unit");
            if (crr_unit == after_unit) {
                use_unit = 0;
            } else if (crr_unit < after_unit) {
                for (var i = crr_unit; i < after_unit; i++) {
                    use_unit += 1;
                }

            } else {
                for (var i = crr_unit; i < MITER_MAX; i++) {
                    use_unit += 1;
                }
                crr_unit = 0;
                for (var i = crr_unit; i <= after_unit; i++) {
                    use_unit += 1;
                }

            }
            console.log(use_unit);
            $("#use_unit").val(use_unit);
        } else {
            $("#use_unit").val("0");
        }
    } else {
        $("#use_unit").val("0");
    }
}

function SaveAdd() {

    swal({
        title: "ยืนยันการบันทึกข้อมูล ?",
        text: "บันทึกข้อมูลการจดมิเตอร์น้ำ",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "บันทึก",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {
            var is_garbage = "0";
            if ($("#is_garbage").is(":checked") == true) {
                is_garbage = "1";
            }

            $.ajax({
                url: "php/api/miter_unit.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'create',
                    'munit_month': $('#munit_month').val(),
                    'munit_year': $('#munit_year').val(),
                    'mt_id': $('#mt_id').val(),
                    'befor_unit': $('#crr_unit').val(),
                    'after_unit': $('#after_unit').val(),
                    'use_unit': $('#use_unit').val(),
                    'is_garbage': is_garbage,

                },
                success: function (data, textStatus, jqXHR) {
                    //console.log(data);
                    var json = JSON.parse(data);

                    if (json['status'] == '1') {
                        swal({
                            title: json['message'],
                            type: "success",
                        });

                    } else {
                        swal({
                            title: json['message'],
                            type: "error",
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(errorThrown.toString());
                }
            });

        }, TIME_OUT)
    });
}