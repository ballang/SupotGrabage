/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var table_person = null;
$(document).ready(function () {
    loadInit();
    $('#tb-person tbody').on('click', 'tr', function () {
        var data = table_person.row(this).data();
        console.log(data);
        $("#ps_code").text(data['ps_code']);
        $("#ps_name").val(data['ps_name']);
        $("#md-person").modal("hide");
        loadMiterID();
    });
});
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
            "ps_code": $("#ps_code").text(),
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


                $("#col-munit_number").show();

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

function Save() {

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
                        loadInit();
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