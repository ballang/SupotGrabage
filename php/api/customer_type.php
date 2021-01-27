<?php

include './ini.php';
include '../class/customer_type.php';
$cm = (isset($_POST['cm'])) ? $_POST['cm'] : '';
$ctype_code = (isset($_POST['ctype_code'])) ? $_POST['ctype_code'] : '';
$ctype_desc = (isset($_POST['ctype_desc'])) ? $_POST['ctype_desc'] : '';
$ctype_create_on = (isset($_POST['ctype_create_on'])) ? $_POST['ctype_create_on'] : '';
$ctype_update_on = (isset($_POST['ctype_update_on'])) ? $_POST['ctype_update_on'] : '';
$ctype_create_by = (isset($_POST['ctype_create_by'])) ? $_POST['ctype_create_by'] : '';
$ctype_update_by = (isset($_POST['ctype_update_by'])) ? $_POST['ctype_update_by'] : '';
$ctype_ste = (isset($_POST['ctype_ste'])) ? $_POST['ctype_ste'] : '';
$obj = array(
    "ctype_code" => $ctype_code,
    "ctype_desc" => $ctype_desc,
    "ctype_create_on" => $ctype_create_on,
    "ctype_update_on" => $ctype_update_on,
    "ctype_create_by" => $ctype_create_by,
    "ctype_update_by" => $ctype_update_by,
    "ctype_ste" => $ctype_ste
);
switch ($cm) {
    case "create":
        $rs = CUSTOMER_TYPE::CREATE($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "บันทึกข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถบันทึกข้อมูลได้"));
        }
        break;
    case "del":
        $rs = CUSTOMER_TYPE::DEL($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "ลบข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถลบข้อมูลได้"));
        }
        break;
    case "change":
        $rs = CUSTOMER_TYPE::CHANGE($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "บันทึกข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถลบข้อมูลได้"));
        }
        break;
    case "read":
        echo json_encode(array("status" => "1", "message" => "success", "data" => CUSTOMER_TYPE::DISPLAY($obj)));
        break;
    case "load":
        echo json_encode(array("status" => "1", "message" => "success", "data" => CUSTOMER_TYPE::LOAD($obj)));
        break;
    default:
        echo json_encode(array("status" => "0", "message" => "Error Command"));
        break;
}
