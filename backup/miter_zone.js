$(document).ready(function () {
loadData();
});
function clearAdd() {
$('#add-z_desc').val("");
$('#add-z_create_on').val("");
$('#add-z_create_by').val("");
$('#add-z_update_on').val("");
$('#add-z_update_by').val("");
$('#add-z_ext1').val("");
$('#add-z_ext2').val("");
$('#add-z_ext3').val("");
$('#add-z_ext4').val("");
$('#add-z_ext5').val("");
$('#add-z_extn1').val("");
$('#add-z_extn2').val("");
$('#add-z_extn3').val("");
$('#add-z_extn4').val("");
$('#add-z_extn5').val("");
$('#add-z_ste').val("");
$('#add-field').focus();
}
function loadData() {
$('#tb-data>tbody>tr').empty();
$.ajax({
url: "php/api/miter_zone.php?=" + Math.random(),
type: 'GET',
data: {
'cm': 'load'
},
success: function (data, textStatus, jqXHR) {
var json = JSON.parse(data);
for (var i = 0; i < json['data'].length; i++) {
var row = "<tr>";
row += "<td>"+json['data'][i]['z_code']+"</td>";
row += "<td>"+json['data'][i]['z_desc']+"</td>";
row += "<td>"+json['data'][i]['z_create_on']+"</td>";
row += "<td>"+json['data'][i]['z_create_by']+"</td>";
row += "<td>"+json['data'][i]['z_update_on']+"</td>";
row += "<td>"+json['data'][i]['z_update_by']+"</td>";
row += "<td>"+json['data'][i]['z_ext1']+"</td>";
row += "<td>"+json['data'][i]['z_ext2']+"</td>";
row += "<td>"+json['data'][i]['z_ext3']+"</td>";
row += "<td>"+json['data'][i]['z_ext4']+"</td>";
row += "<td>"+json['data'][i]['z_ext5']+"</td>";
row += "<td>"+json['data'][i]['z_extn1']+"</td>";
row += "<td>"+json['data'][i]['z_extn2']+"</td>";
row += "<td>"+json['data'][i]['z_extn3']+"</td>";
row += "<td>"+json['data'][i]['z_extn4']+"</td>";
row += "<td>"+json['data'][i]['z_extn5']+"</td>";
row += "<td>"+json['data'][i]['z_ste']+"</td>";
row += "<td align='right'>";
row += "<div class='btn-group btn-group-xs' role='group' aria-label='...' >";
row += "<button onclick=\"openEdit('"+json['data'][i]['z_code']+"')\" type='button' class='btn btn-info btn-xs'><i class='fa fa-folder-open'></i> เปิด</button>";
row += "<button onclick=\"del('"+json['data'][i]['z_code']+"')\" type='button' class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> ลบ</button>";
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
function openEdit(z_code) {
$('#MD-CHANGE').modal("show");
$.ajax({
url: "php/api/miter_zone.php?=" + Math.random(),
type: 'GET',
data: {
'cm': 'read',
'z_code': z_code,
},
success: function (data, textStatus, jqXHR) {
var json = JSON.parse(data);
$('#edt-z_code').val(json['data']['z_code']);
$('#edt-z_desc').val(json['data']['z_desc']);
$('#edt-z_create_on').val(json['data']['z_create_on']);
$('#edt-z_create_by').val(json['data']['z_create_by']);
$('#edt-z_update_on').val(json['data']['z_update_on']);
$('#edt-z_update_by').val(json['data']['z_update_by']);
$('#edt-z_ext1').val(json['data']['z_ext1']);
$('#edt-z_ext2').val(json['data']['z_ext2']);
$('#edt-z_ext3').val(json['data']['z_ext3']);
$('#edt-z_ext4').val(json['data']['z_ext4']);
$('#edt-z_ext5').val(json['data']['z_ext5']);
$('#edt-z_extn1').val(json['data']['z_extn1']);
$('#edt-z_extn2').val(json['data']['z_extn2']);
$('#edt-z_extn3').val(json['data']['z_extn3']);
$('#edt-z_extn4').val(json['data']['z_extn4']);
$('#edt-z_extn5').val(json['data']['z_extn5']);
$('#edt-z_ste').val(json['data']['z_ste']);
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
url: "php/api/miter_zone.php?=" + Math.random(),
type: 'GET',
data: {
'cm': 'create',
'z_desc': $('#add-z_desc').val(),
'z_create_on': $('#add-z_create_on').val(),
'z_create_by': $('#add-z_create_by').val(),
'z_update_on': $('#add-z_update_on').val(),
'z_update_by': $('#add-z_update_by').val(),
'z_ext1': $('#add-z_ext1').val(),
'z_ext2': $('#add-z_ext2').val(),
'z_ext3': $('#add-z_ext3').val(),
'z_ext4': $('#add-z_ext4').val(),
'z_ext5': $('#add-z_ext5').val(),
'z_extn1': $('#add-z_extn1').val(),
'z_extn2': $('#add-z_extn2').val(),
'z_extn3': $('#add-z_extn3').val(),
'z_extn4': $('#add-z_extn4').val(),
'z_extn5': $('#add-z_extn5').val(),
'z_ste': $('#add-z_ste').val(),
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
url: "php/api/miter_zone.php?=" + Math.random(),
type: 'GET',
data: {
'cm': 'change',
'z_code': $('#edt-z_code').val(),
'z_desc': $('#edt-z_desc').val(),
'z_create_on': $('#edt-z_create_on').val(),
'z_create_by': $('#edt-z_create_by').val(),
'z_update_on': $('#edt-z_update_on').val(),
'z_update_by': $('#edt-z_update_by').val(),
'z_ext1': $('#edt-z_ext1').val(),
'z_ext2': $('#edt-z_ext2').val(),
'z_ext3': $('#edt-z_ext3').val(),
'z_ext4': $('#edt-z_ext4').val(),
'z_ext5': $('#edt-z_ext5').val(),
'z_extn1': $('#edt-z_extn1').val(),
'z_extn2': $('#edt-z_extn2').val(),
'z_extn3': $('#edt-z_extn3').val(),
'z_extn4': $('#edt-z_extn4').val(),
'z_extn5': $('#edt-z_extn5').val(),
'z_ste': $('#edt-z_ste').val(),
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
function del(z_code) {
var r = confirm("ยืนยันการลบข้อมูล ");
if (r == true) {
$.ajax({
url: "php/api/miter_zone.php?=" + Math.random(),
type: 'GET',
data: {
'cm': 'del',
'z_code': z_code,
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
