<?php

class MITER_ZONE {

    public static function CREATE($obj) {
        $obj['z_code'] = AUTO_RUN("z_code", "miter_zone", 2);
        $query = "insert into miter_zone ("
                . "z_code,"
                . "z_desc,"
                . "z_create_on,"
                . "z_create_by,"
                . "z_update_on,"
                . "z_update_by,"
                . "z_ext1,"
                . "z_ext2,"
                . "z_ext3,"
                . "z_ext4,"
                . "z_ext5,"
                . "z_extn1,"
                . "z_extn2,"
                . "z_extn3,"
                . "z_extn4,"
                . "z_extn5,"
                . "z_ste"
                . ")values("
                . "'" . $obj['z_code'] . "',"
                . "'" . $obj['z_desc'] . "',"
                . "'" . $obj['z_create_on'] . "',"
                . "'" . $obj['z_create_by'] . "',"
                . "'" . $obj['z_update_on'] . "',"
                . "'" . $obj['z_update_by'] . "',"
                . "'" . $obj['z_ext1'] . "',"
                . "'" . $obj['z_ext2'] . "',"
                . "'" . $obj['z_ext3'] . "',"
                . "'" . $obj['z_ext4'] . "',"
                . "'" . $obj['z_ext5'] . "',"
                . "'" . $obj['z_extn1'] . "',"
                . "'" . $obj['z_extn2'] . "',"
                . "'" . $obj['z_extn3'] . "',"
                . "'" . $obj['z_extn4'] . "',"
                . "'" . $obj['z_extn5'] . "',"
                . "'" . $obj['z_ste'] . "')";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function CHANGE($obj) {
        $query = "update miter_zone set "
                . "z_desc='" . $obj['z_desc'] . "',"
                . "z_create_on='" . $obj['z_create_on'] . "',"
                . "z_create_by='" . $obj['z_create_by'] . "',"
                . "z_update_on='" . $obj['z_update_on'] . "',"
                . "z_update_by='" . $obj['z_update_by'] . "',"
                . "z_ext1='" . $obj['z_ext1'] . "',"
                . "z_ext2='" . $obj['z_ext2'] . "',"
                . "z_ext3='" . $obj['z_ext3'] . "',"
                . "z_ext4='" . $obj['z_ext4'] . "',"
                . "z_ext5='" . $obj['z_ext5'] . "',"
                . "z_extn1='" . $obj['z_extn1'] . "',"
                . "z_extn2='" . $obj['z_extn2'] . "',"
                . "z_extn3='" . $obj['z_extn3'] . "',"
                . "z_extn4='" . $obj['z_extn4'] . "',"
                . "z_extn5='" . $obj['z_extn5'] . "',"
                . "z_ste='" . $obj['z_ste'] . "'"
                . " where z_code ='" . $obj['z_code'] . "'";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function DEL($obj) {
        $query = "delete from miter_zone "
                . " where z_code ='" . $obj['z_code'] . "'";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function DISPLAY($obj) {
        $query = "select * from miter_zone "
                . " where z_code ='" . $obj['z_code'] . "'";
        $arr = array(
            "z_code" => "",
            "z_desc" => "",
            "z_create_on" => "",
            "z_create_by" => "",
            "z_update_on" => "",
            "z_update_by" => "",
            "z_ext1" => "",
            "z_ext2" => "",
            "z_ext3" => "",
            "z_ext4" => "",
            "z_ext5" => "",
            "z_extn1" => "",
            "z_extn2" => "",
            "z_extn3" => "",
            "z_extn4" => "",
            "z_extn5" => "",
            "z_ste" => ""
        );
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            $arr["z_code"] = $data['z_code'];
            $arr["z_desc"] = $data['z_desc'];
            $arr["z_create_on"] = $data['z_create_on'];
            $arr["z_create_by"] = $data['z_create_by'];
            $arr["z_update_on"] = $data['z_update_on'];
            $arr["z_update_by"] = $data['z_update_by'];
            $arr["z_ext1"] = $data['z_ext1'];
            $arr["z_ext2"] = $data['z_ext2'];
            $arr["z_ext3"] = $data['z_ext3'];
            $arr["z_ext4"] = $data['z_ext4'];
            $arr["z_ext5"] = $data['z_ext5'];
            $arr["z_extn1"] = $data['z_extn1'];
            $arr["z_extn2"] = $data['z_extn2'];
            $arr["z_extn3"] = $data['z_extn3'];
            $arr["z_extn4"] = $data['z_extn4'];
            $arr["z_extn5"] = $data['z_extn5'];
            $arr["z_ste"] = $data['z_ste'];
        }
        return $arr;
    }

    public static function LOAD($obj) {
        $query = "select "
                . " z_code   ,  "
                . " z_desc   ,  "
                . " z_create_on   ,  "
                . " z_create_by   ,  "
                . " z_update_on   ,  "
                . " z_update_by   ,  "
                . " z_ext1   ,  "
                . " z_ext2   ,  "
                . " z_ext3   ,  "
                . " z_ext4   ,  "
                . " z_ext5   ,  "
                . " z_extn1   ,  "
                . " z_extn2   ,  "
                . " z_extn3   ,  "
                . " z_extn4   ,  "
                . " z_extn5   ,  "
                . " z_ste  "
                . " from miter_zone where z_ste='1'";
        $arr = array();
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            array_push($arr, array(
                "z_code" => $data['z_code'],
                "z_desc" => $data['z_desc'],
                "z_create_on" => $data['z_create_on'],
                "z_create_by" => $data['z_create_by'],
                "z_update_on" => $data['z_update_on'],
                "z_update_by" => $data['z_update_by'],
                "z_ext1" => $data['z_ext1'],
                "z_ext2" => $data['z_ext2'],
                "z_ext3" => $data['z_ext3'],
                "z_ext4" => $data['z_ext4'],
                "z_ext5" => $data['z_ext5'],
                "z_extn1" => $data['z_extn1'],
                "z_extn2" => $data['z_extn2'],
                "z_extn3" => $data['z_extn3'],
                "z_extn4" => $data['z_extn4'],
                "z_extn5" => $data['z_extn5'],
                "z_ste" => $data['z_ste']
            ));
        }
        return $arr;
    }

    public static function LOAD2($obj) {
        $query = "SELECT 
        miter_zone.z_code,
        miter_zone.z_desc,
        COUNT(miter_water.z_code) AS z_count
        FROM
        miter_zone
        LEFT OUTER JOIN miter_water ON (miter_zone.z_code <= miter_water.z_code)
        GROUP BY
        miter_zone.z_code,
        miter_zone.z_desc";

        $arr = array();
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            array_push($arr, array(
                "z_code"=>$data['z_code'],
                "z_desc"=>$data['z_desc'],
                "z_count"=>$data['z_count']
                
            ));
        }
        return $arr;
    }

}
