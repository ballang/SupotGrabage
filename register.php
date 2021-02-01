<html>
    <head>
        <meta charset="UTF-8"/>
        <title>ลงทะเบียนผู้ใช้บริการ</title>
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
                                <h1 style="margin-top: 10px;color: white">ลงทะเบียนผู้ใช้บริการ</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-8 offset-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
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
                                <a href="private.php" type="button" class="btn btn-secondary">กลับ</a>
                                <button type="button" class="btn btn-primary">ลงทะเบียน</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </body>
</html>