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
<th>รหัสโซน</th>
<th>ชื่อโซน</th>
<th>สร้างเมื่อ</th>
<th>สร้างโดย</th>
<th>อัพเดทเมื่อ</th>
<th>อัพเดทโดย</th>
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
<script src="zjs/miter_zone.js?=<?php echo time(); ?>"></script>
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
<label class="col-md-3 control-label">รหัสโซน</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-z_code" placeholder="รหัสโซน">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ชื่อโซน</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-z_desc" placeholder="ชื่อโซน">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สร้างเมื่อ</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-z_create_on" placeholder="สร้างเมื่อ">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">สร้างโดย</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-z_create_by" placeholder="สร้างโดย">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">อัพเดทเมื่อ</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-z_update_on" placeholder="อัพเดทเมื่อ">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">อัพเดทโดย</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-z_update_by" placeholder="อัพเดทโดย">
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
<input type="text" class="form-control add-input-text" id="add-z_ext1" placeholder="สำรอง 1">
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
<input type="text" class="form-control add-input-text" id="add-z_ext2" placeholder="สำรอง 2">
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
<input type="text" class="form-control add-input-text" id="add-z_ext3" placeholder="สำรอง 3">
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
<input type="text" class="form-control add-input-text" id="add-z_ext4" placeholder="สำรอง 4">
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
<input type="text" class="form-control add-input-text" id="add-z_ext5" placeholder="สำรอง 5">
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
<input type="text" class="form-control add-input-text" id="add-z_extn1" placeholder="สำรองตัวเลข 1">
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
<input type="text" class="form-control add-input-text" id="add-z_extn2" placeholder="สำรองตัวเลข 2">
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
<input type="text" class="form-control add-input-text" id="add-z_extn3" placeholder="สำรองตัวเลข 3">
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
<input type="text" class="form-control add-input-text" id="add-z_extn4" placeholder="สำรองตัวเลข 4">
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
<input type="text" class="form-control add-input-text" id="add-z_extn5" placeholder="สำรองตัวเลข 5">
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
<input type="text" class="form-control add-input-text" id="add-z_ste" placeholder="สถานะ">
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
<label class = "col-md-3 control-label">รหัสโซน</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text" readonly class ="form-control add-input-text" id ="edt-z_code" placeholder ="รหัสโซน">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ชื่อโซน</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-z_desc" placeholder ="ชื่อโซน">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สร้างเมื่อ</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-z_create_on" placeholder ="สร้างเมื่อ">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">สร้างโดย</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-z_create_by" placeholder ="สร้างโดย">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">อัพเดทเมื่อ</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-z_update_on" placeholder ="อัพเดทเมื่อ">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">อัพเดทโดย</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-z_update_by" placeholder ="อัพเดทโดย">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_ext1" placeholder ="สำรอง 1">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_ext2" placeholder ="สำรอง 2">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_ext3" placeholder ="สำรอง 3">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_ext4" placeholder ="สำรอง 4">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_ext5" placeholder ="สำรอง 5">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_extn1" placeholder ="สำรองตัวเลข 1">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_extn2" placeholder ="สำรองตัวเลข 2">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_extn3" placeholder ="สำรองตัวเลข 3">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_extn4" placeholder ="สำรองตัวเลข 4">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_extn5" placeholder ="สำรองตัวเลข 5">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-z_ste" placeholder ="สถานะ">
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
