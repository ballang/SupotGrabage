<?php require_once './_aut.php'; ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>โซนการใช้น้ำ</title>
    </head>
    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <script src="zjs/miter-zone.js?=<?php echo time(); ?>"></script>
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
                                            โซนการใช้น้ำ

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

                                                    <th><div style="width:80px;">รหัสโซน</div></th>
                                                    <th width='100%'><div style="width:100%;">ชื่อโซน</div></th>
                                                    <th><div style="width:120px;">จำนวนมิเตอร์</div></th>                         
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
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มโซนการใช้น้ำ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="add-z_desc">ชื่อโซน</label>
                        <input type="text" class="form-control" id="add-z_desc">
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
                <h5 class="modal-title" id="exampleModalLabel">แก้ไขโซนผู้ใช้น้ำ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="edt-z_code">รหัสผู้ใช้บริการ</label>
                        <input type="text" class="form-control" id="edt-z_code" readonly="">
                    </div>
                    <div class="form-group col-md-9">
                        <label for="edt-z_desc">ชื่อผู้ใช้บริการ</label>
                        <input type="text" class="form-control" id="edt-z_desc">
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

