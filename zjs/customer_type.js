$(document).ready(function () {
    loadData();
});
function clearAdd() {
    $('#add-ctype_desc').val("");
    $('#add-ctype_create_on').val("");
    $('#add-ctype_update_on').val("");
    $('#add-ctype_create_by').val("");
    $('#add-ctype_update_by').val("");
    $('#add-ctype_ste').val("");
    $('#add-field').focus();
}
function loadData() {
    $('#tb-data>tbody>tr').empty();
    $.ajax({
        url: "php/api/customer_type.php?=" + Math.random(),
        type: 'GET',
        data: {
            'cm': 'load'
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            for (var i = 0; i < json['data'].length; i++) {
                var row = "<tr>";
                row += "<td>" + json['data'][i]['ctype_code'] + "</td>";
                row += "<td>" + json['data'][i]['ctype_desc'] + "</td>";
                row += "<td>" + json['data'][i]['ctype_create_on'] + "</td>";
                row += "<td>" + json['data'][i]['ctype_update_on'] + "</td>";
                row += "<td>" + json['data'][i]['ctype_create_by'] + "</td>";
                row += "<td>" + json['data'][i]['ctype_update_by'] + "</td>";
                row += "<td>" + json['data'][i]['ctype_ste'] + "</td>";
                row += "<td align='right'>";
                row += "<div class='btn-group btn-group-xs' role='group' aria-label='...' >";
                row += "<button onclick=\"openEdit('" + json['data'][i]['ctype_code'] + "')\" type='button' class='btn btn-info btn-xs'><i class='fa fa-folder-open'></i> เปิด</button>";
                row += "<button onclick=\"del('" + json['data'][i]['ctype_code'] + "')\" type='button' class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> ลบ</button>";
                row += "</div>";
                row += "</td>";
                row += "</tr>";
                $('#tb-data>tbody').append(row);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown.toString());
        }
    });
}
function openEdit(ctype_code) {
    $('#MD-CHANGE').modal("show");
    $.ajax({
        url: "php/api/customer_type.php?=" + Math.random(),
        type: 'GET',
        data: {
            'cm': 'read',
            'ctype_code': ctype_code,
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            $('#edt-ctype_code').val(json['data']['ctype_code']);
            $('#edt-ctype_desc').val(json['data']['ctype_desc']);
            $('#edt-ctype_create_on').val(json['data']['ctype_create_on']);
            $('#edt-ctype_update_on').val(json['data']['ctype_update_on']);
            $('#edt-ctype_create_by').val(json['data']['ctype_create_by']);
            $('#edt-ctype_update_by').val(json['data']['ctype_update_by']);
            $('#edt-ctype_ste').val(json['data']['ctype_ste']);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown.toString());
        }
    });
}
function saveAdd() {
    var r = confirm("ยืนยันการบันทึกข้อมูล ?");
    if (r == true) {
        $.ajax({
            url: "php/api/customer_type.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'create',
                'ctype_desc': $('#add-ctype_desc').val(),
                'ctype_create_on': $('#add-ctype_create_on').val(),
                'ctype_update_on': $('#add-ctype_update_on').val(),
                'ctype_create_by': $('#add-ctype_create_by').val(),
                'ctype_update_by': $('#add-ctype_update_by').val(),
                'ctype_ste': $('#add-ctype_ste').val(),
            },
            success: function (data, textStatus, jqXHR) {
                var json = JSON.parse(data);
                alert(json['message']);
                if (json['status'] == '1') {
                    clearAdd();
                    loadData();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown.toString());
            }
        });
    }
}
function saveEdit() {
    var r = confirm("ยืนยันการบันทึกข้อมูล ?");
    if (r == true) {
        $.ajax({
            url: "php/api/customer_type.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'change',
                'ctype_code': $('#edt-ctype_code').val(),
                'ctype_desc': $('#edt-ctype_desc').val(),
                'ctype_create_on': $('#edt-ctype_create_on').val(),
                'ctype_update_on': $('#edt-ctype_update_on').val(),
                'ctype_create_by': $('#edt-ctype_create_by').val(),
                'ctype_update_by': $('#edt-ctype_update_by').val(),
                'ctype_ste': $('#edt-ctype_ste').val(),
            },
            success: function (data, textStatus, jqXHR) {
                var json = JSON.parse(data);
                alert(json['message']);
                if (json['status'] == '1') {
                    $('#MD-CHANGE').modal('hide');
                    loadData();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown.toString());
            }
        });
    }
}
function del(ctype_code) {
    var r = confirm("ยืนยันการลบข้อมูล ");
    if (r == true) {
        $.ajax({
            url: "php/api/customer_type.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'del',
                'ctype_code': ctype_code,
            },
            success: function (data, textStatus, jqXHR) {
                var json = JSON.parse(data);
                alert(json['message']);
                if (json['status'] == '1') {
                    loadData();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown.toString());
            }
        });
    }
}
