var table = null;
$(document).ready(function () {
  
    $('#key-search').keyup(function () {
        table.search(this.value)
                .draw();
    });
    loadData();
});
function clearAdd() {
    $('#add-z_desc').val("");
    $('#add-z_desc').focus();
}

function saveAdd() {
    if ($('#add-z_desc').val().length == 0) {
        MESSAGE_WARNING("กรุณากรอกชื่อโซน");
        $('#add-z_desc').focus();
        return false;
    }
   

    swal({
        title: "ยืนยันการบันทึกข้อมูล ?",
        text: "เพิ่มข้อมูลโซนผู้ใช้น้ำ",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "บันทึก",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

 
            $.ajax({
                url: "php/api/miter_zone.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'create',
                    'z_desc': $('#add-z_desc').val(),
                 

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
        url: "php/api/miter_zone.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'load',
        },
        success: function (data, textStatus, jqXHR) {
            //console.log(data);
            var json = JSON.parse(data);


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
                    {"data": "z_code"},
                    {"data": "z_desc"},
                    {"data": "z_count"},

                    {
                        "data": null,
                        "bSortable": false,
                        "mRender": function (o) {
                            var html = "<div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Basic example\">";
                            html += " <button    type=\"button\" onclick=\"del('" + o.z_code + "')\" class=\"btn btn-sm btn-danger\" ><i class=\"fas fa-trash\"></i></button>";
                            html += "  <button type=\"button\"  onclick=\"openEdit('" + o.z_code + "')\" class=\"btn btn-sm btn-warning\"><i class=\"fas fa-pencil-alt\"></i></button>";
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
function del(z_code) {
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
                url: "php/api/miter_zone.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'del',
                    'z_code': z_code,
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
function openEdit(z_code) {
    $('#md-edit').modal("show");
    $.ajax({
        url: "php/api/miter_zone.php?=" + Math.random(),
        type: 'POST',
        data: {
            'cm': 'read',
            'z_code': z_code,
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            $('#edt-z_code').val(json['data']['z_code']);
            $('#edt-z_desc').val(json['data']['z_desc']);
        
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown.toString());
        }
    });
}


function saveEdit() {
    if ($('#edt-z_desc').val().length == 0) {
        MESSAGE_WARNING("กรุณากรอกชื่อโซน");
        $('#edt-z_desc').focus();
        return false;
    }
   
    swal({
        title: "ยืนยันการบันทึกข้อมูล ?",
        text: "แก้ไขข้อมูลโซนผู้ใช้น้ำ",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "บันทึก",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

         
            $.ajax({
                url: "php/api/miter_zone.php?=" + Math.random(),
                type: 'POST',
                data: {
                    'cm': 'change',
                    'ps_code': $('#edt-z_code').val(),
                    'ps_name': $('#edt-z_desc').val(),
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