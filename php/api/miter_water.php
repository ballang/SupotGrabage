<?php

include './ini.php';
include '../class/miter_water.php';
require_once '../class/miter_zone.php';
require_once '../class/person.php';
$file = "miter_water.log";
$cm = (isset($_POST['cm'])) ? $_POST['cm'] : '';
$mt_id = (isset($_POST['mt_id'])) ? $_POST['mt_id'] : '';
$ps_code = (isset($_POST['ps_code'])) ? $_POST['ps_code'] : '';
$z_code = (isset($_POST['z_code'])) ? $_POST['z_code'] : '';
$mt_desc = (isset($_POST['mt_desc'])) ? $_POST['mt_desc'] : '';
$crr_unit = (isset($_POST['crr_unit'])) ? $_POST['crr_unit'] : '';
$reg_date = (isset($_POST['reg_date'])) ? $_POST['reg_date'] : '';
$reg_by = (isset($_POST['reg_by'])) ? $_POST['reg_by'] : '';
$update_on = (isset($_POST['update_on'])) ? $_POST['update_on'] : '';
$update_by = (isset($_POST['update_by'])) ? $_POST['update_by'] : '';
$lat = (isset($_POST['lat'])) ? $_POST['lat'] : '';
$lng = (isset($_POST['lng'])) ? $_POST['lng'] : '';
$house_id = (isset($_POST['house_id'])) ? $_POST['house_id'] : '';
$addr_desc = (isset($_POST['addr_desc'])) ? $_POST['addr_desc'] : '';
$is_garbage = (isset($_POST['is_garbage'])) ? $_POST['is_garbage'] : '';
$mt_ste = (isset($_POST['mt_ste'])) ? $_POST['mt_ste'] : '';
$mt_ext1 = (isset($_POST['mt_ext1'])) ? $_POST['mt_ext1'] : '';
$mt_ext2 = (isset($_POST['mt_ext2'])) ? $_POST['mt_ext2'] : '';
$mt_ext3 = (isset($_POST['mt_ext3'])) ? $_POST['mt_ext3'] : '';
$mt_ext4 = (isset($_POST['mt_ext4'])) ? $_POST['mt_ext4'] : '';
$mt_ext5 = (isset($_POST['mt_ext5'])) ? $_POST['mt_ext5'] : '';
$mt_extn1 = (isset($_POST['mt_extn1'])) ? $_POST['mt_extn1'] : '';
$mt_extn2 = (isset($_POST['mt_extn2'])) ? $_POST['mt_extn2'] : '';
$mt_extn3 = (isset($_POST['mt_extn3'])) ? $_POST['mt_extn3'] : '';
$mt_extn4 = (isset($_POST['mt_extn4'])) ? $_POST['mt_extn4'] : '';
$mt_extn5 = (isset($_POST['mt_extn5'])) ? $_POST['mt_extn5'] : '';
$obj = array(
    "mt_id" => $mt_id,
    "ps_code" => $ps_code,
    "z_code" => $z_code,
    "mt_desc" => $mt_desc,
    "crr_unit" => $crr_unit,
    "reg_date" => $reg_date,
    "reg_by" => $reg_by,
    "update_on" => $update_on,
    "update_by" => $update_by,
    "lat" => $lat,
    "lng" => $lng,
    "house_id" => $house_id,
    "addr_desc" => $addr_desc,
    "is_garbage" => $is_garbage,
    "mt_ste" => $mt_ste,
    "mt_ext1" => $mt_ext1,
    "mt_ext2" => $mt_ext2,
    "mt_ext3" => $mt_ext3,
    "mt_ext4" => $mt_ext4,
    "mt_ext5" => $mt_ext5,
    "mt_extn1" => $mt_extn1,
    "mt_extn2" => $mt_extn2,
    "mt_extn3" => $mt_extn3,
    "mt_extn4" => $mt_extn4,
    "mt_extn5" => $mt_extn5
);
switch ($cm) {
    case "create":
        $obj["reg_date"] = date('Y-m-d H:i:s');
        $obj["reg_by"] = "DEV";
        $obj["update_on"] = date('Y-m-d H:i:s');
        $obj["update_by"] = "DEV";
        $obj['mt_ste'] = "1";

        $is_hourse_id = MITER_WATER::IS_HOUSE_ID($obj);
        if ($is_hourse_id > 0) {
            echo json_encode(array("status" => "0", "message" => "บ้านเลขที่ซ้ำ กรุณากรอกใหม่"));
            break;
        }

        $rs = MITER_WATER::CREATE($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "บันทึกข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถบันทึกข้อมูลได้"));
        }
        break;
    case "del":
        $rs = MITER_WATER::DEL($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "ลบข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถลบข้อมูลได้"));
        }
        break;
    case "change":

        $old_data = MITER_WATER::DISPLAY($obj);
        APPEND_LOG($file, $cm, "check house_id [old= ".$old_data['z_code']." and ".$old_data['house_id']."] [crr_date=".$obj['z_code']." and ".$obj['house_id']."]");
        if ($old_data['z_code'] == $obj['z_code'] && $old_data['house_id'] == $obj['house_id']) {
            // case ไม่ได้แก้ไข บ้านเลขที่ หรือ โซนการใช้น้ำ
        } else {
            $rs = MITER_WATER::IS_HOUSE_ID($obj);
            if ($rs > 0) {
                echo json_encode(array("status" => "0", "message" => "บ้านเลขที่ซ้ำ กรุณากรอกใหม่"));
                break;
            }
        }




        $rs = MITER_WATER::CHANGE($obj);
        if ($rs == 1) {
            echo json_encode(array("status" => "1", "message" => "บันทึกข้อมูลสำเร็จ"));
        } else {
            echo json_encode(array("status" => "0", "message" => "ไม่สามารถลบข้อมูลได้"));
        }
        break;
    case "read":
        echo json_encode(array("status" => "1", "message" => "success", "data" => MITER_WATER::DISPLAY($obj)));
        break;
    case "load":
        $zone = MITER_ZONE::LOAD(array());
        $person = PERSON::LOAD(array());
        echo json_encode(array("status" => "1", "message" => "success", "person" => $person, "zone" => $zone, "data" => MITER_WATER::LOAD1($obj)));
        break;
    case "read-zone":
        
          echo json_encode(array("status" => "1", "message" => "success",  "data" => MITER_WATER::LOAD_ZONE1($obj)));
        break;
    default:
        echo json_encode(array("status" => "0", "message" => "Error Command"));
        break;
}
