<html>

    <head>
        <meta charset="UTF-8"/>
        <title>ลงชื่อเข้าใช้ระบบ</title>
    </head>
    <style>

    </style>
    <?php require './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <body>
        <?php require_once '_top_nav.php';?>
        <div class="container" style="padding-top: 50px">
            <div class="row">
                <div class="col-6">
                    <img src="https://i.imgur.com/uNGdWHi.png" class="img-thumbnail">
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12" align='center'>
                            <span class="text-justify h3"  >ลงชื่อเข้าใช้ระบบ</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="home.php">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text"   class="form-control" id="staticEmail" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        
      <?php require_once './_bottom_nav.php'; ?>
    </body>
</html>