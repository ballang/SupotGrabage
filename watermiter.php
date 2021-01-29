<?php
require_once './_aut.php';
$perpage = 5;
$page = (isset($_GET['page'])) ? $_GET['page'] : '1';
$start = ($page - 1) * $perpage;
?>

<html>
    <head>
        <meta charset="UTF-8"/>
        <title>จดมิเตอร์น้ำ</title>
    </head>
    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <script src="zjs/watermiter.js?=<?php echo time(); ?>"></script>
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
                                            จดมิเตอร์น้ำ
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">โซนใช้น้ำ</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">

                                                    <option value="1">แก้วสุวรรณ</option>
                                                    <option value="2">มหาชัย</option>
                                                    <option value="3">หนองคล้า</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-warning" type="button" onclick="AfterData()">ยกยอด</button>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-sm mb-3">
                                                <input type="text" class="form-control" aria-label="Small" placeholder="วันที่จด" maxlength="2" aria-describedby="inputGroup-sizing-sm">
                                                <select class="custom-select" aria-label="Small" id="inputGroupSelect04">
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
                                                <select class="custom-select" aria-label="Small" id="inputGroupSelect04">
                                                    <option value="2564">2564</option>
                                                </select>

                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary" onclick="PostData()" type="button">บันทึก</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-bordered"  width="100%" cellspacing="0" id="tb-data">
                                            <thead>
                                                <tr>


                                                    <th><div style="width:80px;">รหัสมเตอร์</div></th>  
                                                    <th width='100%'><div style="width:100%;">ชื่อลูกค้า</div></th>
                                                    <th><div style="width:80px;">บ้านเลขที่</div></th>                         
                                                    <th><div style="width:100px;">Unit In</div></th>
                                                    <th><div style="width:100px;">Unit Out</div></th>
                                                    <th><div style="width:100px;">หน่วยที่ใช้</div></th>
                                                    <th><div style="width:100px;">ค่าน้ำ</div></th>
                                                    <th><div style="width:80px;">บริการขยะ</div></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < 15; $i++) {
                                                    ?>
                                                    <tr>

                                                        <td><div style="width:80px;">00001</div></td>  
                                                        <td width='100%'><div style="width:100%;">สมชาย ใจดี</div></td>
                                                        <td><div style="width:80px;">123</div></td>  
                                                        <td><div style="width:100px;">0000 </div></td>
                                                        <td><div style="width:100px;"><input type="text" class="form-control" maxlength="4" placeholder="เฉพาะตัวเลข"/></div></td>
                                                        <td><div style="width:100px;">0012</div></td>
                                                        <td><div style="width:100px;">12</div></td>
                                                        <td><div style="width:80px;">ใช้</div></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
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



