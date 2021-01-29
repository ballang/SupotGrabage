<?php

include './ini.php';
include '../class/miter_zone.php';
$cm = (isset($_POST['cm'])) ? $_POST['cm'] : '';
$z_code = (isset($_POST['z_code'])) ? $_POST['z_code'] : '';
$z_desc = (isset($_POST['z_desc'])) ? $_POST['z_desc'] : '';
$z_create_on = (isset($_POST['z_create_on'])) ? $_POST['z_create_on'] : '';
$z_create_by = (isset($_POST['z_create_by'])) ? $_POST['z_create_by'] : '';
$z_update_on = (isset($_POST['z_update_on'])) ? $_POST['z_update_on'] : '';
$z_update_by = (isset($_POST['z_update_by'])) ? $_POST['z_update_by'] : '';
$z_ext1 = (isset($_POST['z_ext1'])) ? $_POST['z_ext1'] : '';
$z_ext2 = (isset($_POST['z_ext2'])) ? $_POST['z_ext2'] : '';
$z_ext3 = (isset($_POST['z_ext3'])) ? $_POST['z_ext3'] : '';
$z_ext4 = (isset($_POST['z_ext4'])) ? $_POST['z_ext4'] : '';
$z_ext5 = (isset($_POST['z_ext5'])) ? $_POST['z_ext5'] : '';
$z_extn1 = (isset($_POST['z_extn1'])) ? $_POST['z_extn1'] : '';
$z_extn2 = (isset($_POST['z_extn2'])) ? $_POST['z_extn2'] : '';
$z_extn3 = (isset($_POST['z_extn3'])) ? $_POST['z_extn3'] : '';
$z_extn4 = (isset($_POST['z_extn4'])) ? $_POST['z_extn4'] : '';
$z_extn5 = (isset($_POST['z_extn5'])) ? $_POST['z_extn5'] : '';
$z_ste = (isset($_POST['z_ste'])) ? $_POST['z_ste'] : '';
$obj = array(
    "z_code" => $z_code,
    "z_desc" => $z_desc,
    "z_create_on" => $z_create_on,
    "z_create_by" => $z_create_by,
    "z_update_on" => $z_update_on,
    "z_update_by" => $z_update_by,
    "z_ext1" => $z_ext1,
    "z_ext2" => $z_ext2,
    "z_ext3" => $z_ext3,
    "z_ext4" => $z_ext4,
    "z_ext5" => $z_ext5,
    "z_extn1" => $z_extn1,
    "z_extn2" => $z_extn2,
    "z_extn3" => $z_extn3,
    "z_extn4" => $z_extn4,
    "z_extn5" => $z_extn5,
    "z_ste" => $z_ste
);
switch ($cm) {
    case "create":

        $obj["z_create_on"] = date('Y-m-d H:i:s');
        $obj["z_create_by"] = $GLOBALS['USER'];
        $obj["z_update_on"] = date('Y-m-d H:i:s');
        $obj["z_update_by"] = $GLOBALS['USER'];
        $obj['z_ste'] ='1';
        $rs = MITER_ZONE::CREATE($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "บันทึกข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถบันทึกข้อมูลได้"));
        }
        break;
    case "del":
        $rs = MITER_ZONE::DEL($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "ลบข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถลบข้อมูลได้"));
        }
        break;
    case "change":
        $rs = MITER_ZONE::CHANGE($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "บันทึกข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถลบข้อมูลได้"));
        }
        break;
    case "read":
        echo json_encode(array("status" => "1", "message" => "success", "data" => MITER_ZONE::DISPLAY($obj)));
        break;
    case "load":
        echo json_encode(array("status" => "1", "message" => "success", "data" => MITER_ZONE::LOAD2($obj)));
        break;
    default:
        echo json_encode(array("status" => "0", "message" => "Error Command"));
        break;
}
