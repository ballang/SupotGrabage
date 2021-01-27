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
                                        <div class="col-md-10">
                                            บันทึกมิเตอร์ค่าน้ำ

                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-primary btn-block" onclick="Save()">บันทึก</button>
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




                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-row">
                                                <div class=" form-group col-md-3" id="col-munit_number">
                                                    <label for="munit_number">เลขที่จดมิเตอร์</label>
                                                    <input type="text" class="form-control"  id="munit_number" readonly="">
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="munit_month">เดือน</label>
                                                    <select class="custom-select" id="munit_month">
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
                                                <div class="form-group col-md-2">
                                                    <label for="munit_year">ปี</label>
                                                    <select class="custom-select" id="munit_year">
                                                        <option value="2564">2564</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="z_code">โซน</label>
                                                    <select class="custom-select" id="z_code" onchange="zoneChange()">

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ps_name">ชื่อผู้ใช้บริการ</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="ps_code"></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="ps_name" readonly="" placeholder="ชื่อผู้ใช้บริการ" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#md-person" type="button">...</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
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
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="house_id">บ้านเลขที่</label>
                                            <input type="text" class="form-control" id="house_id" readonly="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="addr_desc">ที่อยู่</label>
                                            <input type="text" class="form-control" id="addr_desc" readonly="">
                                        </div>
                                        <!--<div class="form-group col-md-2">
                                            <label for="add-ps_addr1">ละติจูด</label>
                                            <input type="text" class="form-control" id="lat">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="add-ps_addr1">ลองติจูด</label>
                                            <input type="text" class="form-control" id="lng">
                                        </div>
                                        -->
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

<div class="modal fade" id="md-person" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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