$(document).ready(function () {
    loadData();
});
function clearAdd() {
    $('#add-ps_code').val("");
    $('#add-ctype_code').val("");
    $('#add-mt_desc').val("");
    $('#add-crr_unit').val("");
    $('#add-reg_date').val("");
    $('#add-reg_by').val("");
    $('#add-update_on').val("");
    $('#add-update_by').val("");
    $('#add-lat').val("");
    $('#add-lng').val("");
    $('#add-house_id').val("");
    $('#add-mt_ste').val("");
    $('#add-mt_ext1').val("");
    $('#add-mt_ext2').val("");
    $('#add-mt_ext3').val("");
    $('#add-mt_ext4').val("");
    $('#add-mt_ext5').val("");
    $('#add-mt_extn1').val("");
    $('#add-mt_extn2').val("");
    $('#add-mt_extn3').val("");
    $('#add-mt_extn4').val("");
    $('#add-mt_extn5').val("");
    $('#add-field').focus();
}
function loadData() {
    $('#tb-data>tbody>tr').empty();
    $.ajax({
        url: "php/api/miter_water.php?=" + Math.random(),
        type: 'GET',
        data: {
            'cm': 'load'
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            for (var i = 0; i < json['data'].length; i++) {
                var row = "<tr>";
                row += "<td>" + json['data'][i]['mt_id'] + "</td>";
                row += "<td>" + json['data'][i]['ps_code'] + "</td>";
                row += "<td>" + json['data'][i]['ctype_code'] + "</td>";
                row += "<td>" + json['data'][i]['mt_desc'] + "</td>";
                row += "<td>" + json['data'][i]['crr_unit'] + "</td>";
                row += "<td>" + json['data'][i]['reg_date'] + "</td>";
                row += "<td>" + json['data'][i]['reg_by'] + "</td>";
                row += "<td>" + json['data'][i]['update_on'] + "</td>";
                row += "<td>" + json['data'][i]['update_by'] + "</td>";
                row += "<td>" + json['data'][i]['lat'] + "</td>";
                row += "<td>" + json['data'][i]['lng'] + "</td>";
                row += "<td>" + json['data'][i]['house_id'] + "</td>";
                row += "<td>" + json['data'][i]['mt_ste'] + "</td>";
                row += "<td>" + json['data'][i]['mt_ext1'] + "</td>";
                row += "<td>" + json['data'][i]['mt_ext2'] + "</td>";
                row += "<td>" + json['data'][i]['mt_ext3'] + "</td>";
                row += "<td>" + json['data'][i]['mt_ext4'] + "</td>";
                row += "<td>" + json['data'][i]['mt_ext5'] + "</td>";
                row += "<td>" + json['data'][i]['mt_extn1'] + "</td>";
                row += "<td>" + json['data'][i]['mt_extn2'] + "</td>";
                row += "<td>" + json['data'][i]['mt_extn3'] + "</td>";
                row += "<td>" + json['data'][i]['mt_extn4'] + "</td>";
                row += "<td>" + json['data'][i]['mt_extn5'] + "</td>";
                row += "<td align='right'>";
                row += "<div class='btn-group btn-group-xs' role='group' aria-label='...' >";
                row += "<button onclick=\"openEdit('" + json['data'][i]['mt_id'] + "')\" type='button' class='btn btn-info btn-xs'><i class='fa fa-folder-open'></i> เปิด</button>";
                row += "<button onclick=\"del('" + json['data'][i]['mt_id'] + "')\" type='button' class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> ลบ</button>";
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
function openEdit(mt_id) {
    $('#MD-CHANGE').modal("show");
    $.ajax({
        url: "php/api/miter_water.php?=" + Math.random(),
        type: 'GET',
        data: {
            'cm': 'read',
            'mt_id': mt_id,
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            $('#edt-mt_id').val(json['data']['mt_id']);
            $('#edt-ps_code').val(json['data']['ps_code']);
            $('#edt-ctype_code').val(json['data']['ctype_code']);
            $('#edt-mt_desc').val(json['data']['mt_desc']);
            $('#edt-crr_unit').val(json['data']['crr_unit']);
            $('#edt-reg_date').val(json['data']['reg_date']);
            $('#edt-reg_by').val(json['data']['reg_by']);
            $('#edt-update_on').val(json['data']['update_on']);
            $('#edt-update_by').val(json['data']['update_by']);
            $('#edt-lat').val(json['data']['lat']);
            $('#edt-lng').val(json['data']['lng']);
            $('#edt-house_id').val(json['data']['house_id']);
            $('#edt-mt_ste').val(json['data']['mt_ste']);
            $('#edt-mt_ext1').val(json['data']['mt_ext1']);
            $('#edt-mt_ext2').val(json['data']['mt_ext2']);
            $('#edt-mt_ext3').val(json['data']['mt_ext3']);
            $('#edt-mt_ext4').val(json['data']['mt_ext4']);
            $('#edt-mt_ext5').val(json['data']['mt_ext5']);
            $('#edt-mt_extn1').val(json['data']['mt_extn1']);
            $('#edt-mt_extn2').val(json['data']['mt_extn2']);
            $('#edt-mt_extn3').val(json['data']['mt_extn3']);
            $('#edt-mt_extn4').val(json['data']['mt_extn4']);
            $('#edt-mt_extn5').val(json['data']['mt_extn5']);
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
            url: "php/api/miter_water.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'create',
                'ps_code': $('#add-ps_code').val(),
                'ctype_code': $('#add-ctype_code').val(),
                'mt_desc': $('#add-mt_desc').val(),
                'crr_unit': $('#add-crr_unit').val(),
                'reg_date': $('#add-reg_date').val(),
                'reg_by': $('#add-reg_by').val(),
                'update_on': $('#add-update_on').val(),
                'update_by': $('#add-update_by').val(),
                'lat': $('#add-lat').val(),
                'lng': $('#add-lng').val(),
                'house_id': $('#add-house_id').val(),
                'mt_ste': $('#add-mt_ste').val(),
                'mt_ext1': $('#add-mt_ext1').val(),
                'mt_ext2': $('#add-mt_ext2').val(),
                'mt_ext3': $('#add-mt_ext3').val(),
                'mt_ext4': $('#add-mt_ext4').val(),
                'mt_ext5': $('#add-mt_ext5').val(),
                'mt_extn1': $('#add-mt_extn1').val(),
                'mt_extn2': $('#add-mt_extn2').val(),
                'mt_extn3': $('#add-mt_extn3').val(),
                'mt_extn4': $('#add-mt_extn4').val(),
                'mt_extn5': $('#add-mt_extn5').val(),
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
            url: "php/api/miter_water.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'change',
                'mt_id': $('#edt-mt_id').val(),
                'ps_code': $('#edt-ps_code').val(),
                'ctype_code': $('#edt-ctype_code').val(),
                'mt_desc': $('#edt-mt_desc').val(),
                'crr_unit': $('#edt-crr_unit').val(),
                'reg_date': $('#edt-reg_date').val(),
                'reg_by': $('#edt-reg_by').val(),
                'update_on': $('#edt-update_on').val(),
                'update_by': $('#edt-update_by').val(),
                'lat': $('#edt-lat').val(),
                'lng': $('#edt-lng').val(),
                'house_id': $('#edt-house_id').val(),
                'mt_ste': $('#edt-mt_ste').val(),
                'mt_ext1': $('#edt-mt_ext1').val(),
                'mt_ext2': $('#edt-mt_ext2').val(),
                'mt_ext3': $('#edt-mt_ext3').val(),
                'mt_ext4': $('#edt-mt_ext4').val(),
                'mt_ext5': $('#edt-mt_ext5').val(),
                'mt_extn1': $('#edt-mt_extn1').val(),
                'mt_extn2': $('#edt-mt_extn2').val(),
                'mt_extn3': $('#edt-mt_extn3').val(),
                'mt_extn4': $('#edt-mt_extn4').val(),
                'mt_extn5': $('#edt-mt_extn5').val(),
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
function del(mt_id) {
    var r = confirm("ยืนยันการลบข้อมูล ");
    if (r == true) {
        $.ajax({
            url: "php/api/miter_water.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'del',
                'mt_id': mt_id,
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
