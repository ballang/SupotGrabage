<html>
    <head>
        <meta charset="UTF-8"/>
        <title>ลงทะเบียนมิเตอร์น้ำ</title>
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
                                <h1 style="margin-top: 10px;color: white">ลงทะเบียนมิเตอร์น้ำ</h1>
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
                                        <label for="inputEmail4">ชื่อ</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">00001</span>
                                            </div>
                                            <input type="text" readonly="" class="form-control" value="สมชาย ใจดี" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button">เลือก</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">โซนพื้นที่การใช้น้ำ</label>
                                        <select id="inputState" class="form-control">
                                            <option>แก้วสุวรรณ</option>
                                            <option>มหาชัย</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">บ้านเลขที่</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="ที่อยู่ 1">
                                    </div>
                                    <div class="form-group col-md-9">
                                        <label for="inputEmail4">รายละเอียดที่อยู่</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="ที่อยู่ 2">
                                    </div>
                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">เลขมิเตอร์เริ่มต้น</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="xxxx" maxlength="4">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">ใช้บริการเก็บขยะ</label>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    ใช้
                                                </label>
                                           
                                            </div>
                                        </div>
                                    </div>
            
                                </div>
                            </div>

                            <div class="card-footer text-muted" align='right'>
                                <a href="private.php" type="button" class="btn btn-secondary">กลับ</a>
                                <button type="button" class="btn btn-primary">ลงทะเบียนมิเตอร์</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </body>
</html>