$(document).ready(function () {
    loadData();
});
function clearAdd() {
    $('#add-munit_month').val("");
    $('#add-munit_year').val("");
    $('#add-mt_id').val("");
    $('#add-befor_unit').val("");
    $('#add-after_unit').val("");
    $('#add-use_unit').val("");
    $('#add-is_garbage').val("");
    $('#add-munit_create_by').val("");
    $('#add-munit_create_on').val("");
    $('#add-munit_update_by').val("");
    $('#add-munit_update_on').val("");
    $('#add-write_lat').val("");
    $('#add-write_lng').val("");
    $('#add-munit_ext1').val("");
    $('#add-munit_ext2').val("");
    $('#add-munit_ext3').val("");
    $('#add-munit_ext4').val("");
    $('#add-munit_ext5').val("");
    $('#add-munit_extn1').val("");
    $('#add-munit_extn2').val("");
    $('#add-munit_extn3').val("");
    $('#add-munit_extn4').val("");
    $('#add-munit_extn5').val("");
    $('#add-munit_ste').val("");
    $('#add-field').focus();
}
function loadData() {
    $('#tb-data>tbody>tr').empty();
    $.ajax({
        url: "php/api/miter_unit.php?=" + Math.random(),
        type: 'GET',
        data: {
            'cm': 'load'
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            for (var i = 0; i < json['data'].length; i++) {
                var row = "<tr>";
                row += "<td>" + json['data'][i]['munit_number'] + "</td>";
                row += "<td>" + json['data'][i]['munit_month'] + "</td>";
                row += "<td>" + json['data'][i]['munit_year'] + "</td>";
                row += "<td>" + json['data'][i]['mt_id'] + "</td>";
                row += "<td>" + json['data'][i]['befor_unit'] + "</td>";
                row += "<td>" + json['data'][i]['after_unit'] + "</td>";
                row += "<td>" + json['data'][i]['use_unit'] + "</td>";
                row += "<td>" + json['data'][i]['is_garbage'] + "</td>";
                row += "<td>" + json['data'][i]['munit_create_by'] + "</td>";
                row += "<td>" + json['data'][i]['munit_create_on'] + "</td>";
                row += "<td>" + json['data'][i]['munit_update_by'] + "</td>";
                row += "<td>" + json['data'][i]['munit_update_on'] + "</td>";
                row += "<td>" + json['data'][i]['write_lat'] + "</td>";
                row += "<td>" + json['data'][i]['write_lng'] + "</td>";
                row += "<td>" + json['data'][i]['munit_ext1'] + "</td>";
                row += "<td>" + json['data'][i]['munit_ext2'] + "</td>";
                row += "<td>" + json['data'][i]['munit_ext3'] + "</td>";
                row += "<td>" + json['data'][i]['munit_ext4'] + "</td>";
                row += "<td>" + json['data'][i]['munit_ext5'] + "</td>";
                row += "<td>" + json['data'][i]['munit_extn1'] + "</td>";
                row += "<td>" + json['data'][i]['munit_extn2'] + "</td>";
                row += "<td>" + json['data'][i]['munit_extn3'] + "</td>";
                row += "<td>" + json['data'][i]['munit_extn4'] + "</td>";
                row += "<td>" + json['data'][i]['munit_extn5'] + "</td>";
                row += "<td>" + json['data'][i]['munit_ste'] + "</td>";
                row += "<td align='right'>";
                row += "<div class='btn-group btn-group-xs' role='group' aria-label='...' >";
                row += "<button onclick=\"openEdit('" + json['data'][i]['munit_number'] + "')\" type='button' class='btn btn-info btn-xs'><i class='fa fa-folder-open'></i> เปิด</button>";
                row += "<button onclick=\"del('" + json['data'][i]['munit_number'] + "')\" type='button' class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> ลบ</button>";
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
function openEdit(munit_number) {
    $('#MD-CHANGE').modal("show");
    $.ajax({
        url: "php/api/miter_unit.php?=" + Math.random(),
        type: 'GET',
        data: {
            'cm': 'read',
            'munit_number': munit_number,
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            $('#edt-munit_number').val(json['data']['munit_number']);
            $('#edt-munit_month').val(json['data']['munit_month']);
            $('#edt-munit_year').val(json['data']['munit_year']);
            $('#edt-mt_id').val(json['data']['mt_id']);
            $('#edt-befor_unit').val(json['data']['befor_unit']);
            $('#edt-after_unit').val(json['data']['after_unit']);
            $('#edt-use_unit').val(json['data']['use_unit']);
            $('#edt-is_garbage').val(json['data']['is_garbage']);
            $('#edt-munit_create_by').val(json['data']['munit_create_by']);
            $('#edt-munit_create_on').val(json['data']['munit_create_on']);
            $('#edt-munit_update_by').val(json['data']['munit_update_by']);
            $('#edt-munit_update_on').val(json['data']['munit_update_on']);
            $('#edt-write_lat').val(json['data']['write_lat']);
            $('#edt-write_lng').val(json['data']['write_lng']);
            $('#edt-munit_ext1').val(json['data']['munit_ext1']);
            $('#edt-munit_ext2').val(json['data']['munit_ext2']);
            $('#edt-munit_ext3').val(json['data']['munit_ext3']);
            $('#edt-munit_ext4').val(json['data']['munit_ext4']);
            $('#edt-munit_ext5').val(json['data']['munit_ext5']);
            $('#edt-munit_extn1').val(json['data']['munit_extn1']);
            $('#edt-munit_extn2').val(json['data']['munit_extn2']);
            $('#edt-munit_extn3').val(json['data']['munit_extn3']);
            $('#edt-munit_extn4').val(json['data']['munit_extn4']);
            $('#edt-munit_extn5').val(json['data']['munit_extn5']);
            $('#edt-munit_ste').val(json['data']['munit_ste']);
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
            url: "php/api/miter_unit.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'create',
                'munit_month': $('#add-munit_month').val(),
                'munit_year': $('#add-munit_year').val(),
                'mt_id': $('#add-mt_id').val(),
                'befor_unit': $('#add-befor_unit').val(),
                'after_unit': $('#add-after_unit').val(),
                'use_unit': $('#add-use_unit').val(),
                'is_garbage': $('#add-is_garbage').val(),
                'munit_create_by': $('#add-munit_create_by').val(),
                'munit_create_on': $('#add-munit_create_on').val(),
                'munit_update_by': $('#add-munit_update_by').val(),
                'munit_update_on': $('#add-munit_update_on').val(),
                'write_lat': $('#add-write_lat').val(),
                'write_lng': $('#add-write_lng').val(),
                'munit_ext1': $('#add-munit_ext1').val(),
                'munit_ext2': $('#add-munit_ext2').val(),
                'munit_ext3': $('#add-munit_ext3').val(),
                'munit_ext4': $('#add-munit_ext4').val(),
                'munit_ext5': $('#add-munit_ext5').val(),
                'munit_extn1': $('#add-munit_extn1').val(),
                'munit_extn2': $('#add-munit_extn2').val(),
                'munit_extn3': $('#add-munit_extn3').val(),
                'munit_extn4': $('#add-munit_extn4').val(),
                'munit_extn5': $('#add-munit_extn5').val(),
                'munit_ste': $('#add-munit_ste').val(),
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
            url: "php/api/miter_unit.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'change',
                'munit_number': $('#edt-munit_number').val(),
                'munit_month': $('#edt-munit_month').val(),
                'munit_year': $('#edt-munit_year').val(),
                'mt_id': $('#edt-mt_id').val(),
                'befor_unit': $('#edt-befor_unit').val(),
                'after_unit': $('#edt-after_unit').val(),
                'use_unit': $('#edt-use_unit').val(),
                'is_garbage': $('#edt-is_garbage').val(),
                'munit_create_by': $('#edt-munit_create_by').val(),
                'munit_create_on': $('#edt-munit_create_on').val(),
                'munit_update_by': $('#edt-munit_update_by').val(),
                'munit_update_on': $('#edt-munit_update_on').val(),
                'write_lat': $('#edt-write_lat').val(),
                'write_lng': $('#edt-write_lng').val(),
                'munit_ext1': $('#edt-munit_ext1').val(),
                'munit_ext2': $('#edt-munit_ext2').val(),
                'munit_ext3': $('#edt-munit_ext3').val(),
                'munit_ext4': $('#edt-munit_ext4').val(),
                'munit_ext5': $('#edt-munit_ext5').val(),
                'munit_extn1': $('#edt-munit_extn1').val(),
                'munit_extn2': $('#edt-munit_extn2').val(),
                'munit_extn3': $('#edt-munit_extn3').val(),
                'munit_extn4': $('#edt-munit_extn4').val(),
                'munit_extn5': $('#edt-munit_extn5').val(),
                'munit_ste': $('#edt-munit_ste').val(),
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
function del(munit_number) {
    var r = confirm("ยืนยันการลบข้อมูล ");
    if (r == true) {
        $.ajax({
            url: "php/api/miter_unit.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'del',
                'munit_number': munit_number,
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
