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
<th>รหัสประเภทลูกค้า</th>
<th>ชื่อประเภทลูกค้า</th>
<th>สร้างเมื่อ</th>
<th>อัพเดทเมื่อ</th>
<th>สร้างโดย</th>
<th>อัพเดทโดย</th>
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
<script src="zjs/customer_type.js?=<?php echo time(); ?>"></script>
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
<label class="col-md-3 control-label">รหัสประเภทลูกค้า</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ctype_code" placeholder="รหัสประเภทลูกค้า">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ชื่อประเภทลูกค้า</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ctype_desc" placeholder="ชื่อประเภทลูกค้า">
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
<input type="text" class="form-control add-input-text" id="add-ctype_create_on" placeholder="สร้างเมื่อ">
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
<input type="text" class="form-control add-input-text" id="add-ctype_update_on" placeholder="อัพเดทเมื่อ">
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
<input type="text" class="form-control add-input-text" id="add-ctype_create_by" placeholder="สร้างโดย">
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
<input type="text" class="form-control add-input-text" id="add-ctype_update_by" placeholder="อัพเดทโดย">
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
<input type="text" class="form-control add-input-text" id="add-ctype_ste" placeholder="สถานะ">
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
<label class = "col-md-3 control-label">รหัสประเภทลูกค้า</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text" readonly class ="form-control add-input-text" id ="edt-ctype_code" placeholder ="รหัสประเภทลูกค้า">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ชื่อประเภทลูกค้า</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ctype_desc" placeholder ="ชื่อประเภทลูกค้า">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-ctype_create_on" placeholder ="สร้างเมื่อ">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-ctype_update_on" placeholder ="อัพเดทเมื่อ">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-ctype_create_by" placeholder ="สร้างโดย">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-ctype_update_by" placeholder ="อัพเดทโดย">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-ctype_ste" placeholder ="สถานะ">
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
