<html>
    <head>
        <meta charset="UTF-8"/>
        <title>ชำระเงิน</title>
    </head>

    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <body>
        <div id="contain">
            <div class="container" >
                <div class="row">

                    <div class="col-md-8 offset-2">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="margin-top: 10px;color: white">ชำระเงิน</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-8 offset-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="inputEmail4">ใบแจ้งหนี้</label>
                                        <div class="input-group mb-3">

                                            <input type="text" readonly="" class="form-control" value="IV6400001" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button">เลือก</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">

                                        <label for="inputEmail4">วันที่ใบแจ้งหนี้</label>
                                        <input type="text" class="form-control" id="inputEmail4" readonly="" value="01/02/2563" placeholder="ที่อยู่ 1">

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">รหัสผู้ใช้บริการ</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="ที่อยู่ 1">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="inputEmail4">ชื่อผู้ใช้บริการ</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="ที่อยู่ 2">
                                    </div>
                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">รหัสมิเตอร์</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="xxxx" maxlength="4">

                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">บ้านเลขที่</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="xxxx" maxlength="4">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">รายละเอียดที่อยู่</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="xxxx" maxlength="4">

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">หน่วยที่ใช้</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="xxxx" maxlength="4">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">ค่าน้ำ</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" readonly="" value="1,230.00" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">บาท</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">ค่าขยะ</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" readonly="" value="50.00" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">บาท</span>
                                            </div>
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