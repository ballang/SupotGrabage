<html>
    <head>
        <meta charset="UTF-8"/>
        <title>จัดการข้อมูล</title>
    </head>

    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <body>
        <div id="contain">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="margin-top: 10px;color: #FFFFFF">ระบบเก็บค่าน้ำประปาและค่าขยะ</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="private.php">หน้าหลัก</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">จัดการข้อมูล</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col-md-3">
                                <a class="btn btn-light btn-block" href="persons.php" role="button"><i class="fa fa-2x fa-user"></i> <br>ข้อมูลผู้ใช้บริการ</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-light btn-block" href="miters.php" role="button"><i class="fa fa-2x fa-user"></i> <br>ข้อมูลมิเตอร์</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-light btn-block" href="zones.php" role="button"><i class="fa fa-2x fa-map"></i> <br>ข้อมูลโซนการใช้น้ำ</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-light btn-block" href="#" role="button"><i class="fa fa-2x fa-edit"></i> <br>ข้อมูลการจดมิเตอร์</a>
                            </div>
                        </div><br>
                       <div class="form-row">
                            <div class="col-md-3">
                                <a class="btn btn-light btn-block" href="#" role="button"><i class="fa fa-2x fa-file"></i> <br>ข้อมูลใบแจ้งหนี้</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-light btn-block" href="#" role="button"><i class="fa fa-2x fa-money"></i> <br>ข้อมูลการชำระเงิน</a>
                            </div>
                 
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </body>
</html>