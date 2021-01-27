/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var table = null;
var table_person = null;
var table_person_edt = null;
$(document).ready(function () {
    loadData();


    $('#tb-person tbody').on('click', 'tr', function () {
        var data = table_person.row(this).data();
        console.log(data);
        $("#add-ps_code").text(data['ps_code']);
        $("#add-ps_name").val(data['ps_name']);
        $("#md-add-person").modal("hide");
    });

    $('#tb-person-edt tbody').on('click', 'tr', function () {
        var data = table_person.row(this).data();
        console.log(data);
        $("#edt-ps_code").text(data['ps_code']);
        $("#edt-ps_name").val(data['ps_name']);
        $("#md-edt-person").modal("hide");
    });

});

function loadData() {
    $("#miter-zone").prop("disabled", true);
    if (table != null) {
        table.destroy();
    }
    $('#tb-data>tbody>tr').empty();
    var z_code = $("#miter-zone").val();
    console.log(z_code);
    $.ajax({
        url: "php/api/miter_water.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'load',
            'z_code': z_code
        },
        success: function (data, textStatus, jqXHR) {
            //console.log(data);
            var json = JSON.parse(data);
            console.log(json);
            $("#miter-zone").empty();
            $("#add-z_code").empty();
            $("#edt-z_code").empty();
            var select = "";
            var is_select = false;
            for (var i = 0; i < json['zone'].length; i++) {
                if (json['zone'][i]['z_code'] == z_code) {
                    select = "selected";
                    is_select = true;
                } else {
                    select = "";
                }
                $("#miter-zone").append("<option " + select + " value='" + json['zone'][i]['z_code'] + "'>" + json['zone'][i]['z_desc'] + "</option>");
                $("#add-z_code").append("<option value='" + json['zone'][i]['z_code'] + "'>" + json['zone'][i]['z_desc'] + "</option>");
                $("#edt-z_code").append("<option  value='" + json['zone'][i]['z_code'] + "'>" + json['zone'][i]['z_desc'] + "</option>");
            }
            if (is_select == false) {
                select = "selected";
            } else {
                select = "";
            }
            $("#miter-zone").append("<option " + select + " value=''>ทั้งหมด</option>");
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
                    {"data": "mt_id"},
                    {"data": "ps_name"},
                    {"data": "z_desc"},
                    {"data": "house_id"},
                    {"data": "crr_unit"},
                    {"data": "is_garbage_desc"},

                    {"data": "mt_ste_desc"},
                    {
                        "data": null,
                        "bSortable": false,
                        "mRender": function (o) {
                            var html = "<div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Basic example\">";
                            html += " <button    type=\"button\" onclick=\"del('" + o.mt_id + "')\" class=\"btn btn-sm btn-danger\" ><i class=\"fas fa-trash\"></i></button>";
                            html += "  <button type=\"button\"  onclick=\"openEdit('" + o.mt_id + "')\" class=\"btn btn-sm btn-warning\"><i class=\"fas fa-pencil-alt\"></i></button>";
                            html += "</div>";
                            return html;
                        }
                    }
                ],
            });

            if (table_person != null) {
                table_person.destroy();
            }
            if (table_person_edt != null) {
                table_person_edt.destroy();
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
            table_person_edt = $('#tb-person-edt').DataTable({
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


            $("#miter-zone").prop("disabled", false);

        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown.toString());
        }
    });
}


function clearAdd() {
    $('#add-ps_name').val("");
    $('#add-ps_code').text("");
    //$('#add-ctype_code').val("");
    $('#add-mt_desc').val("");
    $('#add-crr_unit').val("");
    $('#add-lat').val("");
    $('#add-lng').val("");
    $('#add-house_id').val("");
    $('#add-addr_desc').val("");
    $("#add-is_garbage").prop("checked", false);
    $('#add-ps_name').focus();
}

function saveAdd() {
    if ($('#add-ps_code').text().length == 0) {
        MESSAGE_WARNING("กรุณาระบุผู้ใช้บริการ");
        return false;
    }
    if ($('#add-z_code').val().length == 0) {
        MESSAGE_WARNING("กรุณาระบุโซน");
        return false;
    }
    if ($('#add-crr_unit').val().length == 0) {
        MESSAGE_WARNING("กรุณากรอกเลขมิเตอร์");
        $('#add-crr_unit').focus();
        return false;
    }
    if ($('#add-house_id').val().length == 0) {
        MESSAGE_WARNING("กรุณาระบุเลขที่บ้าน");
        $('#add-house_id').focus();
        return false;
    }
    var is_garbage = "0";
    if ($("#add-is_garbage").is(":checked") == true) {
        is_garbage = "1";
    }

    swal({
        title: "ยืนยันการบันทึกข้อมูล ?",
        text: "เพิ่มข้อมูลมิเตอร์",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "บันทึก",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

            $.ajax({
                url: "php/api/miter_water.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'create',
                    'ps_code': $('#add-ps_code').text(),
                    'z_code': $('#add-z_code').val(),
                    'mt_desc': $('#add-mt_desc').val(),
                    'crr_unit': $('#add-crr_unit').val(),
                    'lat': $('#add-lat').val(),
                    'lng': $('#add-lng').val(),
                    'house_id': $('#add-house_id').val(),
                    'addr_desc': $('#add-addr_desc').val(),
                    'is_garbage': is_garbage,
                },
                success: function (data, textStatus, jqXHR) {
                    //console.log(data);
                    var json = JSON.parse(data);

                    if (json['status'] == '1') {
                        clearAdd();
                        loadData();
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


function del(mt_id) {
    swal({
        title: "ยืนยันการลบข้อมูล ?",
        text: "ลบข้อมูลมิเตอร์",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "ลบข้อมูล",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

            $.ajax({
                url: "php/api/miter_water.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'del',
                    'mt_id': mt_id,
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


function openEdit(mt_id) {
    $('#md-edit').modal("show");
    $.ajax({
        url: "php/api/miter_water.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'read',
            'mt_id': mt_id,
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            $('#edt-mt_id').val(json['data']['mt_id']);
            $('#edt-ps_code').text(json['data']['ps_code']);
            $("#edt-ps_name").val(json['data']['ps_name']);
            $('#edt-mt_desc').val(json['data']['mt_desc']);
            $('#edt-lat').val(json['data']['lat']);
            $('#edt-lng').val(json['data']['lng']);
            $('#edt-house_id').val(json['data']['house_id']);
            $('#edt-addr_desc').val(json['data']['addr_desc']);
            $("#edt-crr_unit").val(json['data']['crr_unit']);
            if (json['data']['is_garbage'] == '1') {
                $("#edt-is_garbage").prop("checked", true);
            } else {
                $("#edt-is_garbage").prop("checked", false);
            }
            $('#edt-z_code option[value="' + json['data']['z_code'] + '"]').prop("selected", true);
            $('#edt-mt_ste option[value="' + json['data']['mt_ste'] + '"]').prop("selected", true);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown.toString());
        }
    });
}
function saveEdit() {
    if ($('#edt-ps_code').text().length == 0) {
        MESSAGE_WARNING("กรุณาระบุผู้ใช้บริการ");
        return false;
    }
    if ($('#edt-z_code').val().length == 0) {
        MESSAGE_WARNING("กรุณาระบุโซน");
        return false;
    }
    if ($('#edt-crr_unit').val().length == 0) {
        MESSAGE_WARNING("กรุณากรอกเลขมิเตอร์");
        $('#edt-crr_unit').focus();
        return false;
    }
    if ($('#edt-house_id').val().length == 0) {
        MESSAGE_WARNING("กรุณาระบุเลขที่บ้าน");
        $('#edt-house_id').focus();
        return false;
    }
    var is_garbage = "0";
    if ($("#edt-is_garbage").is(":checked") == true) {
        is_garbage = "1";
    }

    swal({
        title: "ยืนยันการบันทึกข้อมูล ?",
        text: "แก้ไขข้อมูลมิเตอร์",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "บันทึก",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

            $.ajax({
                url: "php/api/miter_water.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'change',
                    'mt_id': $('#edt-mt_id').val(),
                    'ps_code': $('#edt-ps_code').text(),
                    'z_code': $('#edt-z_code').val(),
                    'mt_desc': $('#edt-mt_desc').val(),
                    'crr_unit': $('#edt-crr_unit').val(),
                    'lat': $('#edt-lat').val(),
                    'lng': $('#edt-lng').val(),
                    'house_id': $('#edt-house_id').val(),
                    'addr_desc': $('#edt-addr_desc').val(),
                    'is_garbage': is_garbage,
                    'mt_ste':$("#edt-mt_ste").val()
                },
                success: function (data, textStatus, jqXHR) {
                    //console.log(data);
                    var json = JSON.parse(data);

                    if (json['status'] == '1') {
                        clearAdd();
                        loadData();
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

