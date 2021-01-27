<?php
require_once './_aut.php';
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>จัดการมิเตอร์</title>
    </head>
    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <script src="zjs/watermiter-manage.js?=<?php echo time() ?>"></script>
    <body>
        <?php require_once '_top_nav.php'; ?>
        <div class="container-fluid" style="padding-top: 5px">

            <div class="row">
                <div class="col-2">

                    <?php require_once './_menu_emp.php'; ?>


                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-md-6">
                                            จัดการมิเตอร์น้ำ

                                        </div>
                                        <div class="col-md-3">
                                            <select class="custom-select" id="miter-zone" onchange="loadData()">

                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="กรอกคำที่ต้องการค้นหา" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#md-create"  type="button"><i class="fa fa-plus"></i>เพิ่ม</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="0" id="tb-data">
                                            <thead>
                                                <tr>

                                                    <th><div style="width:80px;">รหัสมิเตอร์</div></th>
                                                    <th width='100%'><div style="width:100%;">ชื่อผู้บริการ</div></th>
                                                    <th><div style="width:80px;">โซน</div></th>  
                                                    <th><div style="width:80px;">บ้านเลขที่</div></th>   
                                                    <th><div style="width:80px;">เลขมิเตอร์</div></th>
                                                    <th><div style="width:60px;">บริกรขยะ</div></th>
                                                    <th><div style="width:60px;">สถานะ</div></th>
                                                    <th><div style="width:60px;"></div></th>
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
            </div>

        </div>

        <?php require_once '_bottom_nav.php'; ?>
    </body>
</html>

<div class="modal fade" id="md-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">บันทึกจดบันทึก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="add-cus_name">ชื่อผู้ใช้บริการ</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="add-ps_code"></span>
                            </div>
                            <input type="text" class="form-control" id="add-ps_name" readonly="" placeholder="ชื่อผู้ใช้บริการ" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#md-add-person" type="button">...</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="add-z_code">โซน</label>
                        <select class="custom-select" id="add-z_code">

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="add-mt_desc">ชื่อมิเตอร์</label>
                        <input type="text" class="form-control" id="add-mt_desc">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="add-crr_unit">เลขมิเตอร์</label>
                        <input type="text" class="form-control iphone" id="add-crr_unit">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="add-lat">ละติจูด</label>
                        <input type="text" class="form-control iphone" id="add-lat">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="add-lng">ลองติจูด</label>
                        <input type="text" class="form-control itax"  id="add-lng">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="add-house_id">บ้านเลขที่</label>
                        <input type="text" class="form-control itax"    id="add-house_id">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="add-house_id">ที่อยู่</label>
                        <input type="text" class="form-control"    id="add-addr_desc">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="add-is_garbage">บริการค่าขยะ</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="add-is_garbage">
                            <label class="form-check-label" for="add-is_garbage">
                                ใช้
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" onclick="saveAdd()">บันทึก</button>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="md-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">บันทึกจดบันทึก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="edt-mt_id">รหัสมิเตอร์</label>
                        <input type="text" class="form-control" id="edt-mt_id" readonly="">
                    </div>
                    <div class="form-group col-md-9">
                        <label for="edtcus_name">ชื่อผู้ใช้บริการ</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="edt-ps_code"></span>
                            </div>
                            <input type="text" class="form-control" id="edt-ps_name" readonly="" placeholder="ชื่อผู้ใช้บริการ" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#md-edt-person" type="button">...</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="edt-z_code">โซน</label>
                        <select class="custom-select" id="edt-z_code">

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edt-mt_desc">ชื่อมิเตอร์</label>
                        <input type="text" class="form-control" id="edt-mt_desc">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edt-crr_unit">เลขมิเตอร์</label>
                        <input type="text" class="form-control iphone" id="edt-crr_unit">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="edt-lat">ละติจูด</label>
                        <input type="text" class="form-control iphone" id="edt-lat">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edt-lng">ลองติจูด</label>
                        <input type="text" class="form-control itax"  id="edt-lng">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edt-house_id">บ้านเลขที่</label>
                        <input type="text" class="form-control itax"    id="edt-house_id">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="edt-house_id">ที่อยู่</label>
                        <input type="text" class="form-control"    id="edt-addr_desc">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="edt-is_garbage">บริการค่าขยะ</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="edt-is_garbage">
                            <label class="form-check-label" for="edt-is_garbage">
                                ใช้
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edt-mt_ste">สถานะมิเตอร์</label>
                        <select class="custom-select" id="edt-mt_ste">
                            <option value="1">ปกติ</option>
                            <option value="2">โดนตัด</option>
                            <option value="">ยกเลิก</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" onclick="saveEdit()">บันทึก</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="md-add-person" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เลือกผู้ใช้บริการ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered"  width="100%" cellspacing="0" id="tb-person">
                            <thead>
                                <tr>

                                    <th><div style="width:120px;">รหัสผู้ใช้บริการ</div></th>
                                    <th width='100%'><div style="width:100%;">ชื่อผู้บริการ</div></th>
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


<div class="modal fade" id="md-edt-person" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เลือกผู้ใช้บริการ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered"  width="100%" cellspacing="0" id="tb-person-edt">
                            <thead>
                                <tr>

                                    <th><div style="width:120px;">รหัสผู้ใช้บริการ</div></th>
                                    <th width='100%'><div style="width:100%;">ชื่อผู้บริการ</div></th>
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