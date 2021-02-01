<html>
    <head>
        <meta charset="UTF-8"/>
        <title>จดมิเตอร์ค่าน้ำ</title>
    </head>

    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <body>
        <div id="contain">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 offset-2">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="margin-top: 10px;color: #FFFFFF">ระบบเก็บค่าน้ำประปาและค่าขยะ</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-8  offset-2">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="img/logo.png" class="img-fluid"/>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="form-group col-md-12" align='center'>
                                                <h4>  ลงชื่อเข้าใช้ระบบ</h4>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Username</label>
                                            <div class="col-sm-8">
                                                <input type="text"  class="form-control" id="staticEmail" value="Username">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-8 offset-4">
                                                <a href="private.php" type="button" class="btn btn-primary mb-2">เข้าสู่ระบบ</a>
                                            </div>
                                            
                                        </div>
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