/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var table = null;
$(document).ready(function () {
    document.getElementById("add-ps_img").addEventListener("change", readFileAdd);
    $("#add-ps_img_avatar").attr("src", DEFAULT_IMG);

    document.getElementById("edt-ps_img").addEventListener("change", readFileEdt);
    $("#edt-ps_img_avatar").attr("src", DEFAULT_IMG);

    $('#key-search').keyup(function () {
        table.search(this.value)
                .draw();
    });
    loadData();
});
function clearAdd() {
    $('#add-ps_name').val("");
    //$('#add-ctype_code').val("");
    $('#add-ps_addr1').val("");
    $('#add-ps_addr2').val("");
    $('#add-ps_phone').val("");
    $('#add-ps_tax').val("");
    $("#add-ps_img_avatar").attr("src", DEFAULT_IMG);
    $('#add-ps_name').focus();
}

function saveAdd() {
    if ($('#add-ps_name').val().length == 0) {
        MESSAGE_WARNING("กรุณากรอกชื่อ");
        $('#add-ps_name').focus();
        return false;
    }
    if ($('#add-ctype_code').val().length == 0) {
        MESSAGE_WARNING("กรุณาระบุกลุ่มใช้บริการ");
        return false;
    }
    if ($('#add-ps_addr1').val().length == 0) {
        MESSAGE_WARNING("กรุณาที่อยู่ 1");
        $('#add-ps_addr1').focus();
        return false;
    }
    if ($('#add-ps_addr2').val().length == 0) {
        MESSAGE_WARNING("กรุณาที่อยู่ 2");
        $('#add-ps_addr2').focus();
        return false;
    }

    swal({
        title: "ยืนยันการบันทึกข้อมูล ?",
        text: "เพิ่มข้อมูลผู้ใช้บริการ",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "บันทึก",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

            var tmp = $("#add-ps_img_avatar").attr("src").toString().split(",")[1];
            $.ajax({
                url: "php/api/person.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'create',
                    'ps_name': $('#add-ps_name').val(),
                    'ctype_code': $('#add-ctype_code').val(),
                    'ps_addr1': $('#add-ps_addr1').val(),
                    'ps_addr2': $('#add-ps_addr2').val(),
                    'ps_phone': $('#add-ps_phone').val(),
                    'ps_line': $('#add-ps_line').val(),
                    'ps_tax': $('#add-ps_tax').val(),
                    'ps_img': tmp,

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

function loadData() {
    if (table != null) {
        table.destroy();
    }
    $('#tb-data>tbody>tr').empty();
    $.ajax({
        url: "php/api/person.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'load',
        },
        success: function (data, textStatus, jqXHR) {
            //console.log(data);
            var json = JSON.parse(data);
            console.log(json);
            $("#add-ctype_code").empty();
            $("#edt-ctype_code").empty();

            for (var i = 0; i < json['cus_type'].length; i++) {
                $("#add-ctype_code").append("<option value='" + json['cus_type'][i]['ctype_code'] + "'>" + json['cus_type'][i]['ctype_desc'] + "</option>");
                $("#edt-ctype_code").append("<option value='" + json['cus_type'][i]['ctype_code'] + "'>" + json['cus_type'][i]['ctype_desc'] + "</option>")
            }

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
                    {"data": "ps_code"},
                    {"data": "ps_name"},
                    {"data": "ctype_desc"},
                    //{"data": "ps_line"},
                    {"data": "ps_phone"},
                    //{"data": "ps_tax"},
                    //{"data": "ctype_desc"},
                    {
                        "data": null,
                        "bSortable": false,
                        "mRender": function (o) {
                            var html = "<div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Basic example\">";
                            html += " <button    type=\"button\" onclick=\"del('" + o.ps_code + "')\" class=\"btn btn-sm btn-danger\" ><i class=\"fas fa-trash\"></i></button>";
                            html += "  <button type=\"button\"  onclick=\"openEdit('" + o.ps_code + "')\" class=\"btn btn-sm btn-warning\"><i class=\"fas fa-pencil-alt\"></i></button>";
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
function del(ps_code) {
    swal({
        title: "ยืนยันการลบข้อมูล ?",
        text: "ลบข้อมูลผู้ใช้บริการ",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "ลบข้อมูล",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

            $.ajax({
                url: "php/api/person.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'del',
                    'ps_code': ps_code,
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
function openEdit(ps_code) {
    $('#md-edit').modal("show");
    $.ajax({
        url: "php/api/person.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'read',
            'ps_code': ps_code,
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            $('#edt-ps_code').val(json['data']['ps_code']);
            $('#edt-ps_name').val(json['data']['ps_name']);
            $('#edt-ps_addr1').val(json['data']['ps_addr1']);
            $('#edt-ps_addr2').val(json['data']['ps_addr2']);
            $('#edt-ps_phone').val(json['data']['ps_phone']);
            $('#edt-ps_line').val(json['data']['ps_line']);
            $('#edt-ps_tax').val(json['data']['ps_tax']);
            $('#edt-ps_create_on').val(json['data']['ps_create_on']);
            $('#edt-ps_update_on').val(json['data']['ps_update_on']);
            $('#edt-ps_create_by').val(json['data']['ps_create_by']);
            $('#edt-ps_update_by').val(json['data']['ps_update_by']);
            $('#edt-price_rate option[value="' + json['data']['price_rate'] + '"]').prop("selected", true);
            $('#edt-tax_id').val(json['data']['tax_id']);
            $('#edt-ctype_code option[value="' + json['data']['ctype_code'] + '"]').prop("selected", true);
            $("#edt-ps_img_avatar").attr("src", "data:image/png;base64," + json['data']['ps_img']);

        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown.toString());
        }
    });
}


function readFileAdd() {

    if (this.files && this.files[0]) {

        var FR = new FileReader();
        FR.addEventListener("load", function (e) {

            var res = e.target.result.split(";");
            var typ = res[0].split("/");
            var img_type = typ[1];
            if (img_type == "jpeg" || img_type == "png" || img_type == "jpg") {
                document.getElementById("add-ps_img_avatar").src = e.target.result;
            } else {
                document.getElementById("add-ps_img_avatar").src = DEFAULT_IMG;
                alert("กรุณาเลือกไฟล์นามสกุล jpeg jpg png เท่านั้น");
            }




        });
        FR.readAsDataURL(this.files[0]);
    }

}
function readFileEdt() {

    if (this.files && this.files[0]) {

        var FR = new FileReader();
        FR.addEventListener("load", function (e) {

            var res = e.target.result.split(";");
            var typ = res[0].split("/");
            var img_type = typ[1];
            if (img_type == "jpeg" || img_type == "png" || img_type == "jpg") {
                document.getElementById("edt-ps_img_avatar").src = e.target.result;
            } else {
                document.getElementById("edt-ps_img_avatar").src = DEFAULT_IMG;
                alert("กรุณาเลือกไฟล์นามสกุล jpeg jpg png เท่านั้น");
            }




        });
        FR.readAsDataURL(this.files[0]);
    }

}
function saveEdit() {
    if ($('#edt-ps_name').val().length == 0) {
        MESSAGE_WARNING("กรุณากรอกชื่อ");
        $('#edt-ps_name').focus();
        return false;
    }
    if ($('#edt-ctype_code').val().length == 0) {
        MESSAGE_WARNING("กรุณาระบุกลุ่มใช้บริการ");
        return false;
    }
    if ($('#edt-ps_addr1').val().length == 0) {
        MESSAGE_WARNING("กรุณาที่อยู่ 1");
        $('#edt-ps_addr1').focus();
        return false;
    }
    if ($('#edt-ps_addr2').val().length == 0) {
        MESSAGE_WARNING("กรุณาที่อยู่ 2");
        $('#edt-ps_addr2').focus();
        return false;
    }

    swal({
        title: "ยืนยันการบันทึกข้อมูล ?",
        text: "แก้ไขข้อมูลผู้ใช้บริการ",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "บันทึก",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

            var tmp = $("#edt-ps_img_avatar").attr("src").toString().split(",")[1];
            $.ajax({
                url: "php/api/person.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'change',
                    'ps_code': $('#edt-ps_code').val(),
                    'ps_name': $('#edt-ps_name').val(),
                    'ctype_code': $('#edt-ctype_code').val(),
                    'ps_addr1': $('#edt-ps_addr1').val(),
                    'ps_addr2': $('#edt-ps_addr2').val(),
                    'ps_phone': $('#edt-ps_phone').val(),
                    'ps_line': $('#edt-ps_line').val(),
                    'ps_tax': $('#edt-ps_tax').val(),
                    'ps_img': tmp,

                },
                success: function (data, textStatus, jqXHR) {
                    //console.log(data);
                    var json = JSON.parse(data);

                    if (json['status'] == '1') {
                        //clearAdd();
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