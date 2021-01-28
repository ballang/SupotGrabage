<?php

include './ini.php';
include '../class/miter_unit.php';
include '../class/miter_zone.php';
include '../class/person.php';
include '../class/miter_water.php';
$cm = (isset($_POST['cm'])) ? $_POST['cm'] : '';
$munit_number = (isset($_POST['munit_number'])) ? $_POST['munit_number'] : '';
$munit_month = (isset($_POST['munit_month'])) ? $_POST['munit_month'] : '';
$munit_year = (isset($_POST['munit_year'])) ? $_POST['munit_year'] : '';
$mt_id = (isset($_POST['mt_id'])) ? $_POST['mt_id'] : '';
$befor_unit = (isset($_POST['befor_unit'])) ? $_POST['befor_unit'] : '';
$after_unit = (isset($_POST['after_unit'])) ? $_POST['after_unit'] : '';
$use_unit = (isset($_POST['use_unit'])) ? $_POST['use_unit'] : '';
$is_garbage = (isset($_POST['is_garbage'])) ? $_POST['is_garbage'] : '';
$munit_create_by = (isset($_POST['munit_create_by'])) ? $_POST['munit_create_by'] : '';
$munit_create_on = (isset($_POST['munit_create_on'])) ? $_POST['munit_create_on'] : '';
$munit_update_by = (isset($_POST['munit_update_by'])) ? $_POST['munit_update_by'] : '';
$munit_update_on = (isset($_POST['munit_update_on'])) ? $_POST['munit_update_on'] : '';
$write_lat = (isset($_POST['write_lat'])) ? $_POST['write_lat'] : '';
$write_lng = (isset($_POST['write_lng'])) ? $_POST['write_lng'] : '';
$munit_ext1 = (isset($_POST['munit_ext1'])) ? $_POST['munit_ext1'] : '';
$munit_ext2 = (isset($_POST['munit_ext2'])) ? $_POST['munit_ext2'] : '';
$munit_ext3 = (isset($_POST['munit_ext3'])) ? $_POST['munit_ext3'] : '';
$munit_ext4 = (isset($_POST['munit_ext4'])) ? $_POST['munit_ext4'] : '';
$munit_ext5 = (isset($_POST['munit_ext5'])) ? $_POST['munit_ext5'] : '';
$munit_extn1 = (isset($_POST['munit_extn1'])) ? $_POST['munit_extn1'] : '';
$munit_extn2 = (isset($_POST['munit_extn2'])) ? $_POST['munit_extn2'] : '';
$munit_extn3 = (isset($_POST['munit_extn3'])) ? $_POST['munit_extn3'] : '';
$munit_extn4 = (isset($_POST['munit_extn4'])) ? $_POST['munit_extn4'] : '';
$munit_extn5 = (isset($_POST['munit_extn5'])) ? $_POST['munit_extn5'] : '';
$munit_ste = (isset($_POST['munit_ste'])) ? $_POST['munit_ste'] : '';
$z_code = (isset($_POST['z_code'])) ? $_POST['z_code'] : '';
$obj = array(
    "munit_number" => $munit_number,
    "munit_month" => $munit_month,
    "munit_year" => $munit_year,
    "mt_id" => $mt_id,
    "befor_unit" => $befor_unit,
    "after_unit" => $after_unit,
    "use_unit" => $use_unit,
    "is_garbage" => $is_garbage,
    "munit_create_by" => $munit_create_by,
    "munit_create_on" => $munit_create_on,
    "munit_update_by" => $munit_update_by,
    "munit_update_on" => $munit_update_on,
    "write_lat" => $write_lat,
    "write_lng" => $write_lng,
    "munit_ext1" => $munit_ext1,
    "munit_ext2" => $munit_ext2,
    "munit_ext3" => $munit_ext3,
    "munit_ext4" => $munit_ext4,
    "munit_ext5" => $munit_ext5,
    "munit_extn1" => $munit_extn1,
    "munit_extn2" => $munit_extn2,
    "munit_extn3" => $munit_extn3,
    "munit_extn4" => $munit_extn4,
    "munit_extn5" => $munit_extn5,
    "munit_ste" => $munit_ste,
    "z_code"=>$z_code
);
switch ($cm) {
    case "init":
        $zone = MITER_ZONE::LOAD(array());
        $person = PERSON::LOAD1();
        echo json_encode(array("status" => "1", "message" => "success", "person" => $person, "zone" => $zone));
        break;
    case "create":

        $obj["munit_create_by"] = $GLOBALS['USER'];
        $obj["munit_create_on"] = date("Y-m-d H:i:s");
        $obj["munit_update_by"] = $GLOBALS['USER'];
        $obj["munit_update_on"] = date("Y-m-d H:i:s");
        $obj['munit_ste'] = "1";
        $rs = MITER_UNIT::CREATE($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "บันทึกข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถบันทึกข้อมูลได้"));
        }
        break;
    case "del":
        $rs = MITER_UNIT::DEL($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "ลบข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถลบข้อมูลได้"));
        }
        break;
    case "change":
        $rs = MITER_UNIT::CHANGE($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "บันทึกข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถลบข้อมูลได้"));
        }
        break;
    case "read":
        echo json_encode(array("status" => "1", "message" => "success", "data" => MITER_UNIT::DISPLAY($obj)));
        break;
    case "load":
        echo json_encode(array("status" => "1", "message" => "success", "data" => MITER_UNIT::LOAD($obj)));
        break;
    case "read-miter":
        echo json_encode(array("status" => "1", "message" => "success", "data" => MITER_WATER::DISPLAY($obj), "data-unit" => MITER_UNIT::DISPLAY_MY($obj)));
        break;
    case "load2":
        
          echo json_encode(array("status" => "1", "message" => "success", "data" => MITER_UNIT::LOAD2($obj)));
        break;
    default:
        echo json_encode(array("status" => "0", "message" => "Error Command"));
        break;
}
