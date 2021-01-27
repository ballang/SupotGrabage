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
<th>เลขที่จดบันทึก</th>
<th>ประเดือน</th>
<th>ปี</th>
<th>ผู้สร้างรายการ</th>
<th>วันที่สร้างรายการ</th>
<th>ผู้ปรับปรุงล่าสุด</th>
<th>เวลาปรับปรุงล่าสุด</th>
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
<script src="zjs/miter_unit_master.js?=<?php echo time(); ?>"></script>
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
<label class="col-md-3 control-label">เลขที่จดบันทึก</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-munit_number" placeholder="เลขที่จดบันทึก">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ประเดือน</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-munit_month" placeholder="ประเดือน">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ปี</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-munit_year" placeholder="ปี">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ผู้สร้างรายการ</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-munit_create_by" placeholder="ผู้สร้างรายการ">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">วันที่สร้างรายการ</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-munit_create_on" placeholder="วันที่สร้างรายการ">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ผู้ปรับปรุงล่าสุด</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-munit_update_by" placeholder="ผู้ปรับปรุงล่าสุด">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">เวลาปรับปรุงล่าสุด</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-munit_update_on" placeholder="เวลาปรับปรุงล่าสุด">
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
<input type="text" class="form-control add-input-text" id="add-munit_ext1" placeholder="สำรอง 1">
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
<input type="text" class="form-control add-input-text" id="add-munit_ext2" placeholder="สำรอง 2">
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
<input type="text" class="form-control add-input-text" id="add-munit_ext3" placeholder="สำรอง 3">
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
<input type="text" class="form-control add-input-text" id="add-munit_ext4" placeholder="สำรอง 4">
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
<input type="text" class="form-control add-input-text" id="add-munit_ext5" placeholder="สำรอง 5">
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
<input type="text" class="form-control add-input-text" id="add-munit_extn1" placeholder="สำรองตัวเลข 1">
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
<input type="text" class="form-control add-input-text" id="add-munit_extn2" placeholder="สำรองตัวเลข 2">
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
<input type="text" class="form-control add-input-text" id="add-munit_extn3" placeholder="สำรองตัวเลข 3">
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
<input type="text" class="form-control add-input-text" id="add-munit_extn4" placeholder="สำรองตัวเลข 4">
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
<input type="text" class="form-control add-input-text" id="add-munit_extn5" placeholder="สำรองตัวเลข 5">
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
<input type="text" class="form-control add-input-text" id="add-munit_ste" placeholder="สถานะ">
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
<label class = "col-md-3 control-label">เลขที่จดบันทึก</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text" readonly class ="form-control add-input-text" id ="edt-munit_number" placeholder ="เลขที่จดบันทึก">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ประเดือน</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_month" placeholder ="ประเดือน">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ปี</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_year" placeholder ="ปี">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ผู้สร้างรายการ</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_create_by" placeholder ="ผู้สร้างรายการ">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">วันที่สร้างรายการ</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_create_on" placeholder ="วันที่สร้างรายการ">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ผู้ปรับปรุงล่าสุด</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_update_by" placeholder ="ผู้ปรับปรุงล่าสุด">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">เวลาปรับปรุงล่าสุด</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_update_on" placeholder ="เวลาปรับปรุงล่าสุด">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_ext1" placeholder ="สำรอง 1">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_ext2" placeholder ="สำรอง 2">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_ext3" placeholder ="สำรอง 3">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_ext4" placeholder ="สำรอง 4">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_ext5" placeholder ="สำรอง 5">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_extn1" placeholder ="สำรองตัวเลข 1">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_extn2" placeholder ="สำรองตัวเลข 2">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_extn3" placeholder ="สำรองตัวเลข 3">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_extn4" placeholder ="สำรองตัวเลข 4">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_extn5" placeholder ="สำรองตัวเลข 5">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-munit_ste" placeholder ="สถานะ">
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
