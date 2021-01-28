<?php require_once './_aut.php'; ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>จดมิเตอร์</title>
    </head>
    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <script src="zjs/watermiter.js?=<?php echo time() ?>"></script>
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
                                        <div class="col-md-2">
                                            <div class="form-group row" style="padding-top: 5px">
                                                <label>บันทึกมิเตอร์ค่าน้ำ</label>
                                            </div>


                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group row">

                                                <label for="munit_month" class="col-sm-4 col-form-label">เดือน</label>
                                                <div class="col-sm-8">

                                                    <select class="custom-select" id="munit_month" onchange="readMiterData()">
                                                        <option value="01">มกราคม</option>
                                                        <option value="02">กุมภาพันธ์</option>
                                                        <option value="03">มีนาคม</option>
                                                        <option value="04">เมษายน</option>
                                                        <option value="05">พฤษภาคม</option>
                                                        <option value="06">มิถุนายน</option>
                                                        <option value="07">กรกฎาคม</option>
                                                        <option value="08">สิงหาคม</option>
                                                        <option value="09">กันยายน</option>
                                                        <option value="10">ตุลาคม</option>
                                                        <option value="11">พฤศจิกายน</option>
                                                        <option value="12">ธันวาคม</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="form-group col-md-2">
                                            <div class="form-group row">
                                                <label for="munit_year" class="col-sm-2 col-form-label">ปี</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select" id="munit_year" onchange="readMiterData()">
                                                        <option value="2564">2564</option>
                                                    </select>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">โซน</label>
                                                <div class="col-sm-9">
                                                    <select class="custom-select" id="z_code" onchange="loadData()">

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#md-create" >เพิ่ม</button>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="0" id="tb-data">
                                            <thead>
                                                <tr>

                                                    <th><div style="width:80px;">เลขที่จด</div></th>
                                                    <th width='100%'><div style="width:100%;">ผู้ใช้บริการ</div></th>
                                                    <th><div style="width:80px;">เดือ/ปี</div></th>                         
                                                    <th><div style="width:100px;">ก่อนจด</div></th>
                                                    <th><div style="width:100px;">หลังจด</div></th>
                                                    <th><div style="width:100px;">ที่ใช้</div></th>
                                                    <th><div style="width:100px;">บริการขยะ</div></th>
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
                <h5 class="modal-title" id="exampleModalLabel">บันทึกมิเตอร์การใช้น้ำ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="munit_month_munit_year">เดือน/ปี</label>
                        <input type="text" class="form-control" id="munit_month_munit_year" readonly="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="add-z_code">รหัส/ชื่อโซน</label>
                        <input type="text" class="form-control" id="add-z_code" readonly="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ps_name_add">ชื่อผู้ใช้บริการ</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="ps_code_add"></span>
                            </div>
                            <input type="text" class="form-control" id="ps_name_add" readonly="" placeholder="ชื่อผู้ใช้บริการ" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#md-person-add" type="button">...</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class=" form-group col-md-3">
                        <label for="mt_id">รหัสมิเตอร์</label>
                        <select class="custom-select" id="mt_id" onchange="readMiterData()">

                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="crr_unit">เลขมิเตอร์ก่อนจด</label>
                        <input type="text" class="form-control" id="crr_unit" readonly="">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="after_unit">เลขมิเตอร์หลังจด</label>
                        <input type="text" class="form-control"  onkeyup="cal_unit()" id="after_unit">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="use_unit">จำนวนหน่วยที่ใช้</label>
                        <input type="text" class="form-control" id="use_unit" readonly="">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="is_garbage">บริการค่าขยะ</label><br>
                        <div class="form-check">
                            <input disabled="" class="form-check-input" type="checkbox" value="" id="is_garbage">
                            <label class="form-check-label" for="is_garbage">
                                ใช้
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="house_id">บ้านเลขที่</label>
                        <input type="text" class="form-control" id="house_id" readonly="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="addr_desc">ที่อยู่</label>
                        <input type="text" class="form-control" id="addr_desc" readonly="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" onclick="SaveAdd()">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="md-person-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <table class="table table-bordered"  width="100%" cellspacing="0" id="tb-person-add">
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