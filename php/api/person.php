<?php

include './ini.php';
include '../class/person.php';
include '../class/customer_type.php';
$cm = (isset($_POST['cm'])) ? $_POST['cm'] : '';
$ps_code = (isset($_POST['ps_code'])) ? $_POST['ps_code'] : '';
$ps_name = (isset($_POST['ps_name'])) ? $_POST['ps_name'] : '';
$ctype_code = (isset($_POST['ctype_code'])) ? $_POST['ctype_code'] : '';
$ps_addr1 = (isset($_POST['ps_addr1'])) ? $_POST['ps_addr1'] : '';
$ps_addr2 = (isset($_POST['ps_addr2'])) ? $_POST['ps_addr2'] : '';
$ps_phone = (isset($_POST['ps_phone'])) ? $_POST['ps_phone'] : '';
$ps_line = (isset($_POST['ps_line'])) ? $_POST['ps_line'] : '';
$ps_tax = (isset($_POST['ps_tax'])) ? $_POST['ps_tax'] : '';
$ps_create_on = (isset($_POST['ps_create_on'])) ? $_POST['ps_create_on'] : '';
$ps_update_on = (isset($_POST['ps_update_on'])) ? $_POST['ps_update_on'] : '';
$ps_create_by = (isset($_POST['ps_create_by'])) ? $_POST['ps_create_by'] : '';
$ps_update_by = (isset($_POST['ps_update_by'])) ? $_POST['ps_update_by'] : '';
$ps_img = (isset($_POST['ps_img'])) ? $_POST['ps_img'] : '';
$ps_ext1 = (isset($_POST['ps_ext1'])) ? $_POST['ps_ext1'] : '';
$ps_ext2 = (isset($_POST['ps_ext2'])) ? $_POST['ps_ext2'] : '';
$ps_ext3 = (isset($_POST['ps_ext3'])) ? $_POST['ps_ext3'] : '';
$ps_ext4 = (isset($_POST['ps_ext4'])) ? $_POST['ps_ext4'] : '';
$ps_ext5 = (isset($_POST['ps_ext5'])) ? $_POST['ps_ext5'] : '';
$ps_extn1 = (isset($_POST['ps_extn1'])) ? $_POST['ps_extn1'] : '';
$ps_extn2 = (isset($_POST['ps_extn2'])) ? $_POST['ps_extn2'] : '';
$ps_extn3 = (isset($_POST['ps_extn3'])) ? $_POST['ps_extn3'] : '';
$ps_extn4 = (isset($_POST['ps_extn4'])) ? $_POST['ps_extn4'] : '';
$ps_extn5 = (isset($_POST['ps_extn5'])) ? $_POST['ps_extn5'] : '';
$ps_ste = (isset($_POST['ps_ste'])) ? $_POST['ps_ste'] : '';
$obj = array(
    "ps_code" => $ps_code,
    "ps_name" => $ps_name,
    "ctype_code" => $ctype_code,
    "ps_addr1" => $ps_addr1,
    "ps_addr2" => $ps_addr2,
    "ps_phone" => $ps_phone,
    "ps_tax" => $ps_tax,
    "ps_create_on" => $ps_create_on,
    "ps_update_on" => $ps_update_on,
    "ps_create_by" => $ps_create_by,
    "ps_update_by" => $ps_update_by,
    "ps_line" => $ps_line,
    "ps_img" => $ps_img,
    "ps_ext1" => $ps_ext1,
    "ps_ext2" => $ps_ext2,
    "ps_ext3" => $ps_ext3,
    "ps_ext4" => $ps_ext4,
    "ps_ext5" => $ps_ext5,
    "ps_extn1" => $ps_extn1,
    "ps_extn2" => $ps_extn2,
    "ps_extn3" => $ps_extn3,
    "ps_extn4" => $ps_extn4,
    "ps_extn5" => $ps_extn5,
    "ps_ste" => $ps_ste
);
switch ($cm) {
    case "create":
        $obj["ps_create_on"] = date('Y-m-d H:i:s');
        $obj["ps_update_on"] = date('Y-m-d H:i:s');
        $obj["ps_create_by"] = "DEV";
        $obj["ps_update_by"] = "DEV";
        $obj['ps_ste'] = '1';
        $rs = PERSON::CREATE($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "บันทึกข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถบันทึกข้อมูลได้"));
        }
        break;
    case "del":
        $rs = PERSON::DEL($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "ลบข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถลบข้อมูลได้"));
        }
        break;
    case "change":
        $obj["ps_update_on"] = date('Y-m-d H:i:s');
        $obj["ps_update_by"] = "DEV";
        $rs = PERSON::CHANGE($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "บันทึกข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถลบข้อมูลได้"));
        }
        break;
    case "read":
        echo json_encode(array("status" => "1", "message" => "success", "data" => PERSON::DISPLAY($obj)));
        break;
    case "load":
        $cut_type = CUSTOMER_TYPE::LOAD(array());
        echo json_encode(array("status" => "1", "message" => "success", "data" => PERSON::LOAD1($obj), "cus_type" => $cut_type));
        break;
    default:
        echo json_encode(array("status" => "0", "message" => "Error Command"));
        break;
}
