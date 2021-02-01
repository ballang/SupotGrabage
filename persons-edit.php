<html>
    <head>
        <meta charset="UTF-8"/>
        <title>แก้ไขข้อมูลผู้ใช้บริการ</title>
    </head>

    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <body>
        <div id="contain" style="overflow-y: scroll">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="margin-top: 10px;color: #FFFFFF">ระบบเก็บค่าน้ำประปาและค่าขยะ</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="private.php">หน้าหลัก</a></li>
                                        <li class="breadcrumb-item"><a href="manage.php">จัดการข้อมูล</a></li>
                                        <li class="breadcrumb-item"><a href="persons.php">จัดการข้อมูลผู้ใช้บริการ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">ปรับปรุงข้อมูลผู้ใช้บริการ</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12">
                        <div class="row" >
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="inputEmail4">รหัสผู้ใช้บริการ</label>
                                                <input type="text" readonly="" class="form-control" id="inputEmail4" placeholder="ชื่อผู้ใช้บริการ">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">ชื่อ</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="ชื่อผู้ใช้บริการ">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">ประเภท</label>
                                                <select id="inputState" class="form-control">
                                                    <option>บุคคลธรรมดา</option>
                                                    <option>นิติบุคคล</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">ที่อยู่ 1</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="ที่อยู่ 1">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">ที่อยู่ 2</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="ที่อยู่ 2">
                                            </div>
                                        </div>

                                        <div class="form-row">

                                            <div class="form-group col-md-4">
                                                <label for="inputEmail4">เบอร์โทรศัพท์</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="089xxxxxxx">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputEmail4">Line ID</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="ไอดีไลน์">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputEmail4">เลขภาษี</label>
                                                <input type="text" class="form-control" id="inputEmail4" placeholder="เลขภาษี">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer text-muted" align='right'>
                                        <a href="persons.php" type="button" class="btn btn-secondary">กลับ</a>
                                        <button type="button" class="btn btn-primary">บันทึกการแก้ไข</button>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>
            </div>

        </div>

    </body>
</html>
