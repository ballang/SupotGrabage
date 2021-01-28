<?php

class MITER_UNIT {

    public static function CREATE($obj) {
        $obj['munit_number'] = AUTO_RUN_CH("munit_number", "miter_unit", 7, 'W');
        $query = "insert into miter_unit ("
                . "munit_number,"
                . "munit_month,"
                . "munit_year,"
                . "mt_id,"
                . "befor_unit,"
                . "after_unit,"
                . "use_unit,"
                . "is_garbage,"
                . "munit_create_by,"
                . "munit_create_on,"
                . "munit_update_by,"
                . "munit_update_on,"
                . "write_lat,"
                . "write_lng,"
                . "munit_ext1,"
                . "munit_ext2,"
                . "munit_ext3,"
                . "munit_ext4,"
                . "munit_ext5,"
                . "munit_extn1,"
                . "munit_extn2,"
                . "munit_extn3,"
                . "munit_extn4,"
                . "munit_extn5,"
                . "munit_ste"
                . ")values("
                . "'" . $obj['munit_number'] . "',"
                . "'" . $obj['munit_month'] . "',"
                . "'" . $obj['munit_year'] . "',"
                . "'" . $obj['mt_id'] . "',"
                . "'" . $obj['befor_unit'] . "',"
                . "'" . $obj['after_unit'] . "',"
                . "'" . $obj['use_unit'] . "',"
                . "'" . $obj['is_garbage'] . "',"
                . "'" . $obj['munit_create_by'] . "',"
                . "'" . $obj['munit_create_on'] . "',"
                . "'" . $obj['munit_update_by'] . "',"
                . "'" . $obj['munit_update_on'] . "',"
                . "'" . $obj['write_lat'] . "',"
                . "'" . $obj['write_lng'] . "',"
                . "'" . $obj['munit_ext1'] . "',"
                . "'" . $obj['munit_ext2'] . "',"
                . "'" . $obj['munit_ext3'] . "',"
                . "'" . $obj['munit_ext4'] . "',"
                . "'" . $obj['munit_ext5'] . "',"
                . "'" . $obj['munit_extn1'] . "',"
                . "'" . $obj['munit_extn2'] . "',"
                . "'" . $obj['munit_extn3'] . "',"
                . "'" . $obj['munit_extn4'] . "',"
                . "'" . $obj['munit_extn5'] . "',"
                . "'" . $obj['munit_ste'] . "')";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function CHANGE($obj) {
        $query = "update miter_unit set "
                . "munit_month='" . $obj['munit_month'] . "',"
                . "munit_year='" . $obj['munit_year'] . "',"
                . "mt_id='" . $obj['mt_id'] . "',"
                . "befor_unit='" . $obj['befor_unit'] . "',"
                . "after_unit='" . $obj['after_unit'] . "',"
                . "use_unit='" . $obj['use_unit'] . "',"
                . "is_garbage='" . $obj['is_garbage'] . "',"
                . "munit_create_by='" . $obj['munit_create_by'] . "',"
                . "munit_create_on='" . $obj['munit_create_on'] . "',"
                . "munit_update_by='" . $obj['munit_update_by'] . "',"
                . "munit_update_on='" . $obj['munit_update_on'] . "',"
                . "write_lat='" . $obj['write_lat'] . "',"
                . "write_lng='" . $obj['write_lng'] . "',"
                . "munit_ext1='" . $obj['munit_ext1'] . "',"
                . "munit_ext2='" . $obj['munit_ext2'] . "',"
                . "munit_ext3='" . $obj['munit_ext3'] . "',"
                . "munit_ext4='" . $obj['munit_ext4'] . "',"
                . "munit_ext5='" . $obj['munit_ext5'] . "',"
                . "munit_extn1='" . $obj['munit_extn1'] . "',"
                . "munit_extn2='" . $obj['munit_extn2'] . "',"
                . "munit_extn3='" . $obj['munit_extn3'] . "',"
                . "munit_extn4='" . $obj['munit_extn4'] . "',"
                . "munit_extn5='" . $obj['munit_extn5'] . "',"
                . "munit_ste='" . $obj['munit_ste'] . "'"
                . " where munit_number ='" . $obj['munit_number'] . "'";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function DEL($obj) {
        $query = "delete from miter_unit "
                . " where munit_number ='" . $obj['munit_number'] . "'";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function DISPLAY($obj) {
        $query = "select * from miter_unit "
                . " where munit_number ='" . $obj['munit_number'] . "'";
        $arr = array(
            "munit_number" => "",
            "munit_month" => "",
            "munit_year" => "",
            "mt_id" => "",
            "befor_unit" => "",
            "after_unit" => "",
            "use_unit" => "",
            "is_garbage" => "",
            "munit_create_by" => "",
            "munit_create_on" => "",
            "munit_update_by" => "",
            "munit_update_on" => "",
            "write_lat" => "",
            "write_lng" => "",
            "munit_ext1" => "",
            "munit_ext2" => "",
            "munit_ext3" => "",
            "munit_ext4" => "",
            "munit_ext5" => "",
            "munit_extn1" => "",
            "munit_extn2" => "",
            "munit_extn3" => "",
            "munit_extn4" => "",
            "munit_extn5" => "",
            "munit_ste" => ""
        );
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            $arr["munit_number"] = $data['munit_number'];
            $arr["munit_month"] = $data['munit_month'];
            $arr["munit_year"] = $data['munit_year'];
            $arr["mt_id"] = $data['mt_id'];
            $arr["befor_unit"] = $data['befor_unit'];
            $arr["after_unit"] = $data['after_unit'];
            $arr["use_unit"] = $data['use_unit'];
            $arr["is_garbage"] = $data['is_garbage'];
            $arr["munit_create_by"] = $data['munit_create_by'];
            $arr["munit_create_on"] = $data['munit_create_on'];
            $arr["munit_update_by"] = $data['munit_update_by'];
            $arr["munit_update_on"] = $data['munit_update_on'];
            $arr["write_lat"] = $data['write_lat'];
            $arr["write_lng"] = $data['write_lng'];
            $arr["munit_ext1"] = $data['munit_ext1'];
            $arr["munit_ext2"] = $data['munit_ext2'];
            $arr["munit_ext3"] = $data['munit_ext3'];
            $arr["munit_ext4"] = $data['munit_ext4'];
            $arr["munit_ext5"] = $data['munit_ext5'];
            $arr["munit_extn1"] = $data['munit_extn1'];
            $arr["munit_extn2"] = $data['munit_extn2'];
            $arr["munit_extn3"] = $data['munit_extn3'];
            $arr["munit_extn4"] = $data['munit_extn4'];
            $arr["munit_extn5"] = $data['munit_extn5'];
            $arr["munit_ste"] = $data['munit_ste'];
        }
        return $arr;
    }

    public static function DISPLAY_MY($obj) {
        $query = "select * from miter_unit "
                . " where mt_id ='" . $obj['mt_id'] . "' and munit_month='" . $obj['munit_month'] . "' "
                . " and munit_year='" . $obj['munit_year'] . "' and "
                . " munit_ste<>'0'";
        $arr = array(
            "munit_number" => "",
            "munit_month" => "",
            "munit_year" => "",
            "mt_id" => "",
            "befor_unit" => "",
            "after_unit" => "",
            "use_unit" => "",
            "is_garbage" => "",
            "munit_create_by" => "",
            "munit_create_on" => "",
            "munit_update_by" => "",
            "munit_update_on" => "",
            "write_lat" => "",
            "write_lng" => "",
            "munit_ext1" => "",
            "munit_ext2" => "",
            "munit_ext3" => "",
            "munit_ext4" => "",
            "munit_ext5" => "",
            "munit_extn1" => "",
            "munit_extn2" => "",
            "munit_extn3" => "",
            "munit_extn4" => "",
            "munit_extn5" => "",
            "munit_ste" => ""
        );
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            $arr["munit_number"] = $data['munit_number'];
            $arr["munit_month"] = $data['munit_month'];
            $arr["munit_year"] = $data['munit_year'];
            $arr["mt_id"] = $data['mt_id'];
            $arr["befor_unit"] = $data['befor_unit'];
            $arr["after_unit"] = $data['after_unit'];
            $arr["use_unit"] = $data['use_unit'];
            $arr["is_garbage"] = $data['is_garbage'];
            $arr["munit_create_by"] = $data['munit_create_by'];
            $arr["munit_create_on"] = $data['munit_create_on'];
            $arr["munit_update_by"] = $data['munit_update_by'];
            $arr["munit_update_on"] = $data['munit_update_on'];
            $arr["write_lat"] = $data['write_lat'];
            $arr["write_lng"] = $data['write_lng'];
            $arr["munit_ext1"] = $data['munit_ext1'];
            $arr["munit_ext2"] = $data['munit_ext2'];
            $arr["munit_ext3"] = $data['munit_ext3'];
            $arr["munit_ext4"] = $data['munit_ext4'];
            $arr["munit_ext5"] = $data['munit_ext5'];
            $arr["munit_extn1"] = $data['munit_extn1'];
            $arr["munit_extn2"] = $data['munit_extn2'];
            $arr["munit_extn3"] = $data['munit_extn3'];
            $arr["munit_extn4"] = $data['munit_extn4'];
            $arr["munit_extn5"] = $data['munit_extn5'];
            $arr["munit_ste"] = $data['munit_ste'];
        }
        return $arr;
    }

    public static function LOAD($obj) {
        $query = "select "
                . " munit_number   ,  "
                . " munit_month   ,  "
                . " munit_year   ,  "
                . " mt_id   ,  "
                . " befor_unit   ,  "
                . " after_unit   ,  "
                . " use_unit   ,  "
                . " is_garbage   ,  "
                . " munit_create_by   ,  "
                . " munit_create_on   ,  "
                . " munit_update_by   ,  "
                . " munit_update_on   ,  "
                . " write_lat   ,  "
                . " write_lng   ,  "
                . " munit_ext1   ,  "
                . " munit_ext2   ,  "
                . " munit_ext3   ,  "
                . " munit_ext4   ,  "
                . " munit_ext5   ,  "
                . " munit_extn1   ,  "
                . " munit_extn2   ,  "
                . " munit_extn3   ,  "
                . " munit_extn4   ,  "
                . " munit_extn5   ,  "
                . " munit_ste  "
                . " from miter_unit ";
        $arr = array();
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            array_push($arr, array(
                "munit_number" => $data['munit_number'],
                "munit_month" => $data['munit_month'],
                "munit_year" => $data['munit_year'],
                "mt_id" => $data['mt_id'],
                "befor_unit" => $data['befor_unit'],
                "after_unit" => $data['after_unit'],
                "use_unit" => $data['use_unit'],
                "is_garbage" => $data['is_garbage'],
                "munit_create_by" => $data['munit_create_by'],
                "munit_create_on" => $data['munit_create_on'],
                "munit_update_by" => $data['munit_update_by'],
                "munit_update_on" => $data['munit_update_on'],
                "write_lat" => $data['write_lat'],
                "write_lng" => $data['write_lng'],
                "munit_ext1" => $data['munit_ext1'],
                "munit_ext2" => $data['munit_ext2'],
                "munit_ext3" => $data['munit_ext3'],
                "munit_ext4" => $data['munit_ext4'],
                "munit_ext5" => $data['munit_ext5'],
                "munit_extn1" => $data['munit_extn1'],
                "munit_extn2" => $data['munit_extn2'],
                "munit_extn3" => $data['munit_extn3'],
                "munit_extn4" => $data['munit_extn4'],
                "munit_extn5" => $data['munit_extn5'],
                "munit_ste" => $data['munit_ste']
            ));
        }
        return $arr;
    }

    public static function LOAD2($obj) {
        $query = "SELECT 
        miter_unit.munit_number,
        miter_unit.mt_id,
        miter_unit.befor_unit,
        miter_unit.after_unit,
        miter_unit.use_unit,
        miter_unit.is_garbage,
        person.ps_name,
        miter_unit.munit_create_on,
        miter_unit.munit_create_by,
        miter_unit.munit_month,
        CONCAT(miter_unit.munit_month,'/',miter_unit.munit_year) as period
        FROM
        miter_water
        INNER JOIN miter_unit ON (miter_water.mt_id = miter_unit.mt_id)
        INNER JOIN person ON (miter_water.ps_code = person.ps_code)
        where miter_unit.munit_month='" . $obj['munit_month'] . "' and  
        miter_unit.munit_year='" . $obj['munit_year'] . "' and  
        miter_water.z_code='" . $obj['z_code'] . "'";
        $arr = array();
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {

            array_push($arr, array(
                "munit_number" => $data['munit_number'],
                "mt_id" => $data['mt_id'],
                "befor_unit" => $data['befor_unit'],
                "after_unit" => $data['after_unit'],
                "use_unit" => $data['use_unit'],
                "is_garbage" => MITER_WATER::GARBAGE_DESC( $data['is_garbage']),
                "ps_name" => $data['ps_name'],
                "munit_create_on" => $data['munit_create_on'],
                "munit_create_by" => $data["munit_create_by"],
                "period"=>$data['period']
            ));
        }
        return $arr;
    }

}
