<?php require_once './_aut.php'; ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>กำหนดค่าใช้จ่าย</title>
    </head>
    <?php require_once './_css.php'; ?>
    <?php require_once './_js.php'; ?>
    <body>
        <?php require_once '_top_nav.php'; ?>
        <div class="container" style="padding-top: 5px">

            <div class="row">
                <div class="col-3">

                    <?php require_once './_menu_emp.php'; ?>


                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-md-6">
                                            กำหนดค่าใช้จ่าย

                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ประเภทค่าน้ำ</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ค่าน้ำแปรผัน</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">อื่นๆ</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <br>
                                                    <div class="table-responsive" >
                                                        <table class="table table-bordered"  width="100%" cellspacing="0" id="tb-data">
                                                            <thead>
                                                                <tr>

                                                                    <th><div style="width:120px;">รหัสประเภท</div></th>
                                                                    <th width='100%'><div style="width:100%;">ประเภท</div></th>
                                                                    <th><div style="width:80px;">ค่าบริการ</div></th>
                                                                    <th><div style="width:90px;">หน่วยขั้นต้ำ</div></th>
                                                                    <th><div style="width:120px;">ค่าบริการขั้นต่ำ</div></th>
                                                                    <th><div style="width:100px;"></div></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>

                                                                    <td><div style="width:120px;">A01</div></td>
                                                                    <td width='100%'><div style="width:100%;">ปกติ</div></td>
                                                                    <td><div style="width:80px;">20 บาท</div></td>
                                                                    <td><div style="width:80px;">20 หน่วย</div></td>
                                                                    <td><div style="width:80px;">20 บาท</div></td>
                                                                    <td>
                                                                        <div style="width:60px;">
                                                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                                <button type="button" class="btn btn-danger">ลบ</button>
                                                                                <button type="button" class="btn btn-warning">ปรับปรุง</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>

                                                                    <td><div style="width:120px;">A02</div></td>
                                                                    <td width='100%'><div style="width:100%;">พิเศษ</div></td>
                                                                    <td><div style="width:80px;">20 บาท</div></td>
                                                                    <td><div style="width:80px;">20 หน่วย</div></td>
                                                                    <td><div style="width:80px;">20 บาท</div></td>
                                                                    <td>
                                                                        <div style="width:60px;">
                                                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                                <button type="button" class="btn btn-danger">ลบ</button>
                                                                                <button type="button" class="btn btn-warning">ปรับปรุง</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#md-create" >เพิ่ม</button>
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                                                    <br>
                                                    <div class="table-responsive" >
                                                        <table class="table table-bordered"  width="100%" cellspacing="0" id="tb-data">
                                                            <thead>
                                                                <tr>

                                                                    <th><div style="width:130px;">จำนวนหน่วยที่ใช้</div></th>
                                                                    <th width='100%'><div style="width:100%;">ค่าบริการ</div></th>
                                                                    <th><div style="width:100px;"></div></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>

                                                                    <td><div style="width:130px;">1</div></td>
                                                                    <td width='100%'><div style="width:100%;">5</div></td>
                                                                    <td>
                                                                        <div style="width:60px;">
                                                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                                <button type="button" class="btn btn-danger">ลบ</button>
                                                                                <button type="button" class="btn btn-warning">ปรับปรุง</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>

                                                                    <td><div style="width:130px;">2</div></td>
                                                                    <td width='100%'><div style="width:100%;">10</div></td>
                                                                    <td>
                                                                        <div style="width:60px;">
                                                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                                                <button type="button" class="btn btn-danger">ลบ</button>
                                                                                <button type="button" class="btn btn-warning">ปรับปรุง</button>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#md-create-warter-unit" >เพิ่ม</button>

                                                </div>
                                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                                    <div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">ค่าขยะ</label>
                                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">ค่าปรับล่าช้ำ</label>
                                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputCity">ภาษีมูลค่เพิ่ม</label>
                                                                <input type="text" class="form-control" id="inputCity">
                                                            </div>
                                                        
                                                        </div>
                                                        
                                                        <button type="button" class="btn btn-primary">บันทึก</button>
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
            </div>

        </div>

        <?php require_once '_bottom_nav.php'; ?>
    </body>
</html>

<div class="modal fade" id="md-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มประเภทค่าน้ำ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="add-cus_name">ประเภท</label>
                        <input type="text" class="form-control" id="add-cus_name">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="add-cus_addr2">หน่วยขั้นต่ำ</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="กรอกจำนวนเงิน" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">บาท</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="add-cus_addr1">ค่าน้ำ/หน่วย</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="กรอกจำนวนเงิน" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">บาท</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="add-cus_addr2">ค่าน้ำขั้นต่ำ</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="กรอกจำนวนเงิน" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">บาท</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" onclick="saveAdd()">บันทึก</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="md-create-warter-unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มหน่วยค่าน้ำ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="add-cus_name">หน่วยที่ใช้</label>
                        <input type="text" class="form-control" id="add-cus_name">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="add-cus_addr2">ค่าบริการ</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="กรอกจำนวนเงิน" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">บาท</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" onclick="saveAdd()">บันทึก</button>
            </div>
        </div>
    </div>
</div>