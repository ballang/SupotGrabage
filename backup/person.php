<?php include './_sess.inc'; ?>
<html>
<title>
จัดการข้อมูล 
</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include './_css.inc'; ?>
</head>
<body>
<div id="wrapper">
<?php include './_nav.inc'; ?>
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
<div class="panel-heading">
จัดการข้อมูล 
<div class="input-group input-group-sm pull-right" style="width: 250px; margin-top: -5px;">
<input type="text" class="form-control input-sm" id="key" placeholder="กรอกชื่อ">
<span class="input-group-btn">
<button class="btn btn-default btn-sm" type="button" onclick="loadData()">ค้นหา</button>
<button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#MD-CREATE">เพิ่ม</button>
</span>
</div>
</div>
<div class="table-responsive">
<table class="table-hover table" id="tb-data">
<thead>
<tr class="success">
<th>รหัสลูกค้า</th>
<th>ชื่อลูกค้า</th>
<th>ประเภท</th>
<th>ที่อยู่ 1</th>
<th>ที่อยู่ 2</th>
<th>เบอร์โทรศัพท์</th>
<th>เลขภาษี</th>
<th>วันที่เพิ่ม</th>
<th>วันที่ปรับปรุง</th>
<th>ผู้เพิ่ม</th>
<th>ผู้ปรับปรุง</th>
<th>สำรอง 1</th>
<th>สำรอง 2</th>
<th>สำรอง 3</th>
<th>สำรอง 4</th>
<th>สำรอง 5</th>
<th>สำรองตัวเลข 1</th>
<th>สำรองตัวเลข 2</th>
<th>สำรองตัวเลข 3</th>
<th>สำรองตัวเลข 4</th>
<th>สำรองตัวเลข 5</th>
<th>สถานะ</th>
<th><div align="right" style="padding-right: 10px;">Action</div></th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<?php include './_js.inc'; ?>
<script src="zjs/person.js?=<?php echo time(); ?>"></script>
<div class="modal fade" id="MD-CREATE" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Create Member</h4>
</div>
<div class="modal-body">
<div class="form-horizontal">
<fieldset>
<div class="form-group">
<label class="col-md-3 control-label">รหัสลูกค้า</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_code" placeholder="รหัสลูกค้า">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ชื่อลูกค้า</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_name" placeholder="ชื่อลูกค้า">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ประเภท</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ctype_code" placeholder="ประเภท">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ที่อยู่ 1</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_addr1" placeholder="ที่อยู่ 1">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ที่อยู่ 2</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_addr2" placeholder="ที่อยู่ 2">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">เบอร์โทรศัพท์</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_phone" placeholder="เบอร์โทรศัพท์">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">เลขภาษี</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_tax" placeholder="เลขภาษี">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">วันที่เพิ่ม</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_create_on" placeholder="วันที่เพิ่ม">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">วันที่ปรับปรุง</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_update_on" placeholder="วันที่ปรับปรุง">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ผู้เพิ่ม</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_create_by" placeholder="ผู้เพิ่ม">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ผู้ปรับปรุง</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_update_by" placeholder="ผู้ปรับปรุง">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สำรอง 1</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_ext1" placeholder="สำรอง 1">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สำรอง 2</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_ext2" placeholder="สำรอง 2">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สำรอง 3</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_ext3" placeholder="สำรอง 3">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สำรอง 4</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_ext4" placeholder="สำรอง 4">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สำรอง 5</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_ext5" placeholder="สำรอง 5">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สำรองตัวเลข 1</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_extn1" placeholder="สำรองตัวเลข 1">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สำรองตัวเลข 2</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_extn2" placeholder="สำรองตัวเลข 2">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สำรองตัวเลข 3</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_extn3" placeholder="สำรองตัวเลข 3">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สำรองตัวเลข 4</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_extn4" placeholder="สำรองตัวเลข 4">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สำรองตัวเลข 5</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_extn5" placeholder="สำรองตัวเลข 5">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สถานะ</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_ste" placeholder="สถานะ">
</div>
</div>
</div>
</div>
</fieldset>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
<button type="button" class="btn btn-primary" onclick="saveAdd()">บันทึก</button>
</div>
</div>
</div>
</div>
<div class = "modal fade" id = "MD-CHANGE" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel">
<div class = "modal-dialog" role = "document">
<div class = "modal-content">
<div class = "modal-header">
<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;
</span></button>
<h4 class = "modal-title" id = "myModalLabel">แก้ไขข้อมูล Member</h4>
</div>
<div class = "modal-body">
<div class = "form-horizontal">
<fieldset>
<div class = "form-group">
<label class = "col-md-3 control-label">รหัสลูกค้า</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text" readonly class ="form-control add-input-text" id ="edt-ps_code" placeholder ="รหัสลูกค้า">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ชื่อลูกค้า</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_name" placeholder ="ชื่อลูกค้า">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ประเภท</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ctype_code" placeholder ="ประเภท">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ที่อยู่ 1</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_addr1" placeholder ="ที่อยู่ 1">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ที่อยู่ 2</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_addr2" placeholder ="ที่อยู่ 2">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">เบอร์โทรศัพท์</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_phone" placeholder ="เบอร์โทรศัพท์">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">เลขภาษี</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_tax" placeholder ="เลขภาษี">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">วันที่เพิ่ม</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_create_on" placeholder ="วันที่เพิ่ม">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">วันที่ปรับปรุง</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_update_on" placeholder ="วันที่ปรับปรุง">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ผู้เพิ่ม</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_create_by" placeholder ="ผู้เพิ่ม">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ผู้ปรับปรุง</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_update_by" placeholder ="ผู้ปรับปรุง">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สำรอง 1</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_ext1" placeholder ="สำรอง 1">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สำรอง 2</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_ext2" placeholder ="สำรอง 2">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สำรอง 3</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_ext3" placeholder ="สำรอง 3">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สำรอง 4</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_ext4" placeholder ="สำรอง 4">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สำรอง 5</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_ext5" placeholder ="สำรอง 5">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สำรองตัวเลข 1</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_extn1" placeholder ="สำรองตัวเลข 1">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สำรองตัวเลข 2</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_extn2" placeholder ="สำรองตัวเลข 2">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สำรองตัวเลข 3</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_extn3" placeholder ="สำรองตัวเลข 3">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สำรองตัวเลข 4</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_extn4" placeholder ="สำรองตัวเลข 4">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สำรองตัวเลข 5</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_extn5" placeholder ="สำรองตัวเลข 5">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สถานะ</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_ste" placeholder ="สถานะ">
</div>
</div>
</div>
</div>
</fieldset>
</div>
</div>
<div class ="modal-footer">
<button type ="button" class ="btn btn-default" data-dismiss ="modal">ยกเลิก</button>
<button type ="button" class ="btn btn-primary" onclick="saveEdit()">บันทึก</button>
</div>
</div>
</div>
</div>
