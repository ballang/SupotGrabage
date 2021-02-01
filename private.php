<html>
    <head>
        <meta charset="UTF-8"/>
        <title>หน้าหลัก</title>
    </head>

    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <body>
        <div id="contain">
            <div class="container" >
                <div class="row">
 
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12" align='center'>
                                <h1 style="margin-top: 10px;color: white">ระบบเก็บค่าน้ำประปาและค่าขยะ</h1>
                                <h3 style="margin-top: 10px;color: white">องค์การบริหารส่วนตำบลมหาชัย</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 80px">
                    <div class="col-md-4 offset-4">
                        <a type="button" href="register.php" class="btn btn-success btn-block"><h4>ลงทะเบียนผู้ใช้บริการ</h4></a>
                        <a href="miter-register.php" type="button" class="btn btn-warning btn-block"><h4>ลงทะเบียนมิเตอร์น้ำ</h4></a>
                        <a href="payments.php" type="button" class="btn btn-danger btn-block"><h4>ชำระเงิน</h4></a>
                        <a href="miter-note.php" type="button" class="btn btn-secondary btn-block"><h4>จดมิเตอร์น้ำ</h4></a>
                        <a href="manage.php" type="button" class="btn btn-dark btn-block"><h4>จัดการข้อมูล</h4></a>

                    </div>

                </div>
            </div>

        </div>

    </body>
</html>