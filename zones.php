<html>
    <head>
        <meta charset="UTF-8"/>
        <title>จัดการข้อมูลโซนการใช้น้ำ</title>
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
                                        <li class="breadcrumb-item active" aria-current="page">จัดการข้อมูลการใช้น้ำ</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                         
                                            <input type="text" class="form-control" placeholder="ค้นหา" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-success" type="button">เพิ่ม</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered"  width="100%" cellspacing="0" id="tb-data">
                                                <thead>
                                                    <tr>

                                                        <th><div style="width:120px;" align='center'>รหัสโซน</div></th>  
                                                        <th width='100%'><div style="width:100%;">ชื่อโซน</div></th>
                                                        <th><div style="width:120px;"align='center'>จำนวนมิเตอร์</div></th>                         


                                                        <th><div style="width:80px;" align='center'></div></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    for ($i = 0; $i < 10; $i++) {
                                                        ?>
                                                        <tr>

                                                            <td><div style="width:120px;" align='center'>00001</div></td>  
                                                            <td width='100%'><div style="width:100%;" align='left'>แก้วสุวรรณ</div></td>
                                                            <td><div style="width:80px;" align='center'>1234</div></td>  

                                                            <td>
                                                                <div style="width:120px;" align='center'>
                                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                                        <button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                                                                    </div>
                                                                </div>
                                                            </td>
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

        </div>

    </body>
</html>