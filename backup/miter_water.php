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
<th>miter id</th>
<th>เจ้าของ</th>
<th>โซน</th>
<th>ชื่อมิเตอร์</th>
<th>ยูนิต</th>
<th>วันที่ลงทะเบียน</th>
<th>ผู้บันทึกการลงทะเบียน</th>
<th>ปรับปรุงล่าสุด</th>
<th>ผู้บันทึกการปรับปรุง</th>
<th>ละติจูด</th>
<th>ลองติจูด</th>
<th>บ้านเลขที่</th>
<th>สถานะ</th>
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
<script src="zjs/miter_water.js?=<?php echo time(); ?>"></script>
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
<label class="col-md-3 control-label">miter id</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-mt_id" placeholder="miter id">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">เจ้าของ</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ps_code" placeholder="เจ้าของ">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">โซน</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-ctype_code" placeholder="โซน">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ชื่อมิเตอร์</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-mt_desc" placeholder="ชื่อมิเตอร์">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ยูนิต</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-crr_unit" placeholder="ยูนิต">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">วันที่ลงทะเบียน</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-reg_date" placeholder="วันที่ลงทะเบียน">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ผู้บันทึกการลงทะเบียน</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-reg_by" placeholder="ผู้บันทึกการลงทะเบียน">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ปรับปรุงล่าสุด</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-update_on" placeholder="ปรับปรุงล่าสุด">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ผู้บันทึกการปรับปรุง</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-update_by" placeholder="ผู้บันทึกการปรับปรุง">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ละติจูด</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-lat" placeholder="ละติจูด">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">ลองติจูด</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-lng" placeholder="ลองติจูด">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">บ้านเลขที่</label>
<div class="col-md-4">
<div class="form-inline">
<div class="form-group" style="margin-left: 0px;">
<label class="sr-only" for="exampleInputEmail3">Email address</label>
<input type="text" class="form-control add-input-text" id="add-house_id" placeholder="บ้านเลขที่">
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
<input type="text" class="form-control add-input-text" id="add-mt_ste" placeholder="สถานะ">
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
<input type="text" class="form-control add-input-text" id="add-mt_ext1" placeholder="สำรอง 1">
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
<input type="text" class="form-control add-input-text" id="add-mt_ext2" placeholder="สำรอง 2">
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
<input type="text" class="form-control add-input-text" id="add-mt_ext3" placeholder="สำรอง 3">
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
<input type="text" class="form-control add-input-text" id="add-mt_ext4" placeholder="สำรอง 4">
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
<input type="text" class="form-control add-input-text" id="add-mt_ext5" placeholder="สำรอง 5">
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
<input type="text" class="form-control add-input-text" id="add-mt_extn1" placeholder="สำรองตัวเลข 1">
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
<input type="text" class="form-control add-input-text" id="add-mt_extn2" placeholder="สำรองตัวเลข 2">
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
<input type="text" class="form-control add-input-text" id="add-mt_extn3" placeholder="สำรองตัวเลข 3">
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
<input type="text" class="form-control add-input-text" id="add-mt_extn4" placeholder="สำรองตัวเลข 4">
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
<input type="text" class="form-control add-input-text" id="add-mt_extn5" placeholder="สำรองตัวเลข 5">
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
<label class = "col-md-3 control-label">miter id</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text" readonly class ="form-control add-input-text" id ="edt-mt_id" placeholder ="miter id">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">เจ้าของ</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ps_code" placeholder ="เจ้าของ">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">โซน</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-ctype_code" placeholder ="โซน">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ชื่อมิเตอร์</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_desc" placeholder ="ชื่อมิเตอร์">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ยูนิต</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-crr_unit" placeholder ="ยูนิต">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">วันที่ลงทะเบียน</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-reg_date" placeholder ="วันที่ลงทะเบียน">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ผู้บันทึกการลงทะเบียน</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-reg_by" placeholder ="ผู้บันทึกการลงทะเบียน">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ปรับปรุงล่าสุด</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-update_on" placeholder ="ปรับปรุงล่าสุด">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ผู้บันทึกการปรับปรุง</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-update_by" placeholder ="ผู้บันทึกการปรับปรุง">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ละติจูด</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-lat" placeholder ="ละติจูด">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">ลองติจูด</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-lng" placeholder ="ลองติจูด">
</div>
</div>
</div>
</div>
<div class = "form-group">
<label class = "col-md-3 control-label">บ้านเลขที่</label>
<div class = "col-md-4">
<div class = "form-inline">
<div class = "form-group" style = "margin-left: 0px;">
<label class ="sr-only" for ="exampleInputEmail3">Email address</label>
<input type ="text"  class ="form-control add-input-text" id ="edt-house_id" placeholder ="บ้านเลขที่">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_ste" placeholder ="สถานะ">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_ext1" placeholder ="สำรอง 1">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_ext2" placeholder ="สำรอง 2">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_ext3" placeholder ="สำรอง 3">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_ext4" placeholder ="สำรอง 4">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_ext5" placeholder ="สำรอง 5">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_extn1" placeholder ="สำรองตัวเลข 1">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_extn2" placeholder ="สำรองตัวเลข 2">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_extn3" placeholder ="สำรองตัวเลข 3">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_extn4" placeholder ="สำรองตัวเลข 4">
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
<input type ="text"  class ="form-control add-input-text" id ="edt-mt_extn5" placeholder ="สำรองตัวเลข 5">
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
