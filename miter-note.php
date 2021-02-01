<html>
    <head>
        <meta charset="UTF-8"/>
        <title>จดมิเตอร์ค่าน้ำ</title>
    </head>

    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <body>
        <div id="contain" style="overflow-x: scroll">
            <div class="container" >
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="margin-top: 10px;color: white">จดมิเตอร์ค่าน้ำ</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">โซนพื้นที่การใช้น้ำ</label>
                                        <select id="inputState" class="form-control">
                                            <option>แก้วสุวรรณ</option>
                                            <option>มหาชัย</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="inputState">วันที่จดมิเตอร์</label>
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
                                                <button class="btn btn-outline-primary"   type="button">ยกยอด</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered"  width="100%" cellspacing="0" id="tb-data">
                                                <thead>
                                                    <tr>

                                                        <th><div style="width:80px;" align='center'>รหัสมเตอร์</div></th>  
                                                        <th width='100%'><div style="width:100%;">ชื่อลูกค้า</div></th>
                                                        <th><div style="width:80px;"align='center'>บ้านเลขที่</div></th>                         
                                                        <th><div style="width:80px;" align='center'>Unit In</div></th>
                                                        <th><div style="width:70px;" align='center'>Unit Out</div></th>
                                                        <th><div style="width:80px;" align='center'>หน่วยที่ใช้</div></th>
                                                        <th><div style="width:100px;" align='right'>ค่าน้ำ</div></th>
                                                        <th><div style="width:80px;" align='right'>บริการขยะ</div></th>
                                                        <th><div style="width:80px;" align='right'>รวมเป็นเงิน</div></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    for ($i = 0; $i < 15; $i++) {
                                                        ?>
                                                        <tr>
                                                          
                                                            <td><div style="width:80px;" align='center'>00001</div></td>  
                                                            <td width='100%'><div style="width:100%;" align='center'>สมชาย ใจดี</div></td>
                                                            <td><div style="width:80px;" align='center'>123</div></td>  
                                                            <td><div style="width:80px;" align='center'>0012</div></td>
                                                            <td><div style="width:70px;" align='center'><input type="text" style="text-align: center; " placeholder="0000" maxlength="4" class="form-control form-control-sm"/></div></td>
                                                            <td><div style="width:80px;" align='center'>0012</div></td>
                                                            <td><div style="width:100px;" align='right'>12</div></td>
                                                            <td><div style="width:80px;" align='right'>50</div></td>
                                                            <td><div style="width:80px;" align='right'>500</div></td>
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

                            <div class="card-footer text-muted" align='right'>
                                <a href="private.php" type="button" class="btn btn-secondary">กลับ</a>
                                <button type="button" class="btn btn-primary">บันทึกรายการ</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </body>
</html>