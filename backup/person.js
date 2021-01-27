$(document).ready(function () {
    loadData();
});
function clearAdd() {
    $('#add-ps_name').val("");
    $('#add-ctype_code').val("");
    $('#add-ps_addr1').val("");
    $('#add-ps_addr2').val("");
    $('#add-ps_phone').val("");
    $('#add-ps_tax').val("");
    $('#add-ps_create_on').val("");
    $('#add-ps_update_on').val("");
    $('#add-ps_create_by').val("");
    $('#add-ps_update_by').val("");
    $('#add-ps_ext1').val("");
    $('#add-ps_ext2').val("");
    $('#add-ps_ext3').val("");
    $('#add-ps_ext4').val("");
    $('#add-ps_ext5').val("");
    $('#add-ps_extn1').val("");
    $('#add-ps_extn2').val("");
    $('#add-ps_extn3').val("");
    $('#add-ps_extn4').val("");
    $('#add-ps_extn5').val("");
    $('#add-ps_ste').val("");
    $('#add-field').focus();
}
function loadData() {
    $('#tb-data>tbody>tr').empty();
    $.ajax({
        url: "php/api/person.php?=" + Math.random(),
        type: 'GET',
        data: {
            'cm': 'load'
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            for (var i = 0; i < json['data'].length; i++) {
                var row = "<tr>";
                row += "<td>" + json['data'][i]['ps_code'] + "</td>";
                row += "<td>" + json['data'][i]['ps_name'] + "</td>";
                row += "<td>" + json['data'][i]['ctype_code'] + "</td>";
                row += "<td>" + json['data'][i]['ps_addr1'] + "</td>";
                row += "<td>" + json['data'][i]['ps_addr2'] + "</td>";
                row += "<td>" + json['data'][i]['ps_phone'] + "</td>";
                row += "<td>" + json['data'][i]['ps_tax'] + "</td>";
                row += "<td>" + json['data'][i]['ps_create_on'] + "</td>";
                row += "<td>" + json['data'][i]['ps_update_on'] + "</td>";
                row += "<td>" + json['data'][i]['ps_create_by'] + "</td>";
                row += "<td>" + json['data'][i]['ps_update_by'] + "</td>";
                row += "<td>" + json['data'][i]['ps_ext1'] + "</td>";
                row += "<td>" + json['data'][i]['ps_ext2'] + "</td>";
                row += "<td>" + json['data'][i]['ps_ext3'] + "</td>";
                row += "<td>" + json['data'][i]['ps_ext4'] + "</td>";
                row += "<td>" + json['data'][i]['ps_ext5'] + "</td>";
                row += "<td>" + json['data'][i]['ps_extn1'] + "</td>";
                row += "<td>" + json['data'][i]['ps_extn2'] + "</td>";
                row += "<td>" + json['data'][i]['ps_extn3'] + "</td>";
                row += "<td>" + json['data'][i]['ps_extn4'] + "</td>";
                row += "<td>" + json['data'][i]['ps_extn5'] + "</td>";
                row += "<td>" + json['data'][i]['ps_ste'] + "</td>";
                row += "<td align='right'>";
                row += "<div class='btn-group btn-group-xs' role='group' aria-label='...' >";
                row += "<button onclick=\"openEdit('" + json['data'][i]['ps_code'] + "')\" type='button' class='btn btn-info btn-xs'><i class='fa fa-folder-open'></i> เปิด</button>";
                row += "<button onclick=\"del('" + json['data'][i]['ps_code'] + "')\" type='button' class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> ลบ</button>";
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
function openEdit(ps_code) {
    $('#MD-CHANGE').modal("show");
    $.ajax({
        url: "php/api/person.php?=" + Math.random(),
        type: 'GET',
        data: {
            'cm': 'read',
            'ps_code': ps_code,
        },
        success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            $('#edt-ps_code').val(json['data']['ps_code']);
            $('#edt-ps_name').val(json['data']['ps_name']);
            $('#edt-ctype_code').val(json['data']['ctype_code']);
            $('#edt-ps_addr1').val(json['data']['ps_addr1']);
            $('#edt-ps_addr2').val(json['data']['ps_addr2']);
            $('#edt-ps_phone').val(json['data']['ps_phone']);
            $('#edt-ps_tax').val(json['data']['ps_tax']);
            $('#edt-ps_create_on').val(json['data']['ps_create_on']);
            $('#edt-ps_update_on').val(json['data']['ps_update_on']);
            $('#edt-ps_create_by').val(json['data']['ps_create_by']);
            $('#edt-ps_update_by').val(json['data']['ps_update_by']);
            $('#edt-ps_ext1').val(json['data']['ps_ext1']);
            $('#edt-ps_ext2').val(json['data']['ps_ext2']);
            $('#edt-ps_ext3').val(json['data']['ps_ext3']);
            $('#edt-ps_ext4').val(json['data']['ps_ext4']);
            $('#edt-ps_ext5').val(json['data']['ps_ext5']);
            $('#edt-ps_extn1').val(json['data']['ps_extn1']);
            $('#edt-ps_extn2').val(json['data']['ps_extn2']);
            $('#edt-ps_extn3').val(json['data']['ps_extn3']);
            $('#edt-ps_extn4').val(json['data']['ps_extn4']);
            $('#edt-ps_extn5').val(json['data']['ps_extn5']);
            $('#edt-ps_ste').val(json['data']['ps_ste']);
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
            url: "php/api/person.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'create',
                'ps_name': $('#add-ps_name').val(),
                'ctype_code': $('#add-ctype_code').val(),
                'ps_addr1': $('#add-ps_addr1').val(),
                'ps_addr2': $('#add-ps_addr2').val(),
                'ps_phone': $('#add-ps_phone').val(),
                'ps_tax': $('#add-ps_tax').val(),
                'ps_create_on': $('#add-ps_create_on').val(),
                'ps_update_on': $('#add-ps_update_on').val(),
                'ps_create_by': $('#add-ps_create_by').val(),
                'ps_update_by': $('#add-ps_update_by').val(),
                'ps_ext1': $('#add-ps_ext1').val(),
                'ps_ext2': $('#add-ps_ext2').val(),
                'ps_ext3': $('#add-ps_ext3').val(),
                'ps_ext4': $('#add-ps_ext4').val(),
                'ps_ext5': $('#add-ps_ext5').val(),
                'ps_extn1': $('#add-ps_extn1').val(),
                'ps_extn2': $('#add-ps_extn2').val(),
                'ps_extn3': $('#add-ps_extn3').val(),
                'ps_extn4': $('#add-ps_extn4').val(),
                'ps_extn5': $('#add-ps_extn5').val(),
                'ps_ste': $('#add-ps_ste').val(),
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
            url: "php/api/person.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'change',
                'ps_code': $('#edt-ps_code').val(),
                'ps_name': $('#edt-ps_name').val(),
                'ctype_code': $('#edt-ctype_code').val(),
                'ps_addr1': $('#edt-ps_addr1').val(),
                'ps_addr2': $('#edt-ps_addr2').val(),
                'ps_phone': $('#edt-ps_phone').val(),
                'ps_tax': $('#edt-ps_tax').val(),
                'ps_create_on': $('#edt-ps_create_on').val(),
                'ps_update_on': $('#edt-ps_update_on').val(),
                'ps_create_by': $('#edt-ps_create_by').val(),
                'ps_update_by': $('#edt-ps_update_by').val(),
                'ps_ext1': $('#edt-ps_ext1').val(),
                'ps_ext2': $('#edt-ps_ext2').val(),
                'ps_ext3': $('#edt-ps_ext3').val(),
                'ps_ext4': $('#edt-ps_ext4').val(),
                'ps_ext5': $('#edt-ps_ext5').val(),
                'ps_extn1': $('#edt-ps_extn1').val(),
                'ps_extn2': $('#edt-ps_extn2').val(),
                'ps_extn3': $('#edt-ps_extn3').val(),
                'ps_extn4': $('#edt-ps_extn4').val(),
                'ps_extn5': $('#edt-ps_extn5').val(),
                'ps_ste': $('#edt-ps_ste').val(),
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
function del(ps_code) {
    var r = confirm("ยืนยันการลบข้อมูล ");
    if (r == true) {
        $.ajax({
            url: "php/api/person.php?=" + Math.random(),
            type: 'GET',
            data: {
                'cm': 'del',
                'ps_code': ps_code,
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
