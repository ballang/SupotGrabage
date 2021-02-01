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
                                            ชำระเงิน

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


