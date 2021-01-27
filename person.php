<?php require_once './_aut.php'; ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>ข้อมูลผู้ใช้บริการ</title>
    </head>
    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <script src="zjs/persons.js?=<?php echo time(); ?>"></script>
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
                                            จัดการข้อมูลผู้ใช้บริการ

                                        </div>

                                        <div class="col-md-6">
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

                                                    <th><div style="width:80px;">รหัสลูกค้า</div></th>
                                                    <th width='100%'><div style="width:100%;">ชื่อลูกค้า</div></th>
                                                    <th><div style="width:80px;">กลุ่มลูกค้า</div></th>                         
                                                    <th><div style="width:100px;">เบอร์โทรศัพท์</div></th>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลผู้ใช้บริการ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="add-ps_name">ชื่อผู้ใช้บริการ</label>
                        <input type="text" class="form-control" id="add-ps_name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="add-ctype_code">ประเภทลูกค้า</label>
                        <select class="custom-select" id="add-ctype_code">

                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="add-ps_addr1">ที่อยู่ 1</label>
                        <input type="text" class="form-control" id="add-ps_addr1">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="add-ps_addr2">ที่อยู่ 2</label>
                        <input type="text" class="form-control" id="add-ps_addr2">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="add-ps_phone">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control iphone" id="add-ps_phone">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="add-ps_line">Line ID</label>
                        <input type="text" class="form-control" id="add-ps_line">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="add-ps_tax">เลขภาษี</label>
                        <input type="text" class="form-control itax" id="add-ps_tax">
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <img id="add-ps_img_avatar" src="" class="rounded float-left img-fluid" alt="...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control-file" id="add-ps_img" style="display: none">
                        <div class="btn-group" role="group" aria-label="Basic example">

                            <button type="button" class="btn btn-info" onclick="$('#add-ps_img').click()">เลือกรูป</button>
                            <button type="button" class="btn btn-danger" onclick="$('#add-ps_img_avatar').attr('src', DEFAULT_IMG)">เอารูปออก</button>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลผู้ใช้บริการ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="edt-ps_code">รหัสผู้ใช้บริการ</label>
                        <input type="text" class="form-control" id="edt-ps_code" readonly="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edt-ps_name">ชื่อผู้ใช้บริการ</label>
                        <input type="text" class="form-control" id="edt-ps_name">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="edt-ctype_code">ประเภทลูกค้า</label>
                        <select class="custom-select" id="edt-ctype_code">

                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="edt-ps_addr1">ที่อยู่ 1</label>
                        <input type="text" class="form-control" id="edt-ps_addr1">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="edt-ps_addr2">ที่อยู่ 2</label>
                        <input type="text" class="form-control" id="edt-ps_addr2">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="edt-ps_phone">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control iphone" id="edt-ps_phone">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edt-ps_line">Line ID</label>
                        <input type="text" class="form-control" id="edt-ps_line">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edt-ps_tax">เลขภาษี</label>
                        <input type="text" class="form-control itax" id="edt-ps_tax">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="edt-ps_create_on">วันที่เพิ่ม</label>
                        <input type="text" class="form-control" id="edt-ps_create_on" readonly="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="edt-ps_create_by">ผู้เพิ่มข้อมูล</label>
                        <input type="text" class="form-control" id="edt-ps_create_by" readonly="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="edt-ps_update_on">ปรับปรุงล่าสุด</label>
                        <input type="text" class="form-control" id="edt-ps_update_on" readonly="">
                    </div>
                     <div class="form-group col-md-3">
                        <label for="edt-ps_update_by">ผู้ปรับปรุง</label>
                        <input type="text" class="form-control" id="edt-ps_update_by" readonly="">
                    </div>
                </div>
                
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <img id="edt-ps_img_avatar" src="" class="rounded float-left img-fluid" alt="...">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control-file" id="edt-ps_img" style="display: none">
                        <div class="btn-group" role="group" aria-label="Basic example">

                            <button type="button" class="btn btn-info" onclick="$('#edt-ps_img').click()">เลือกรูป</button>
                            <button type="button" class="btn btn-danger" onclick="$('#edt-ps_img_avatar').attr('src', DEFAULT_IMG)">เอารูปออก</button>
                        </div>
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

