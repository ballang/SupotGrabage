<?php

class MITER_WATER {

    public static function CREATE($obj) {

        $obj['mt_id'] = AUTO_RUN("mt_id", "miter_water", 7);

        $query = "insert into miter_water ("
                . "mt_id,"
                . "ps_code,"
                . "z_code,"
                . "mt_desc,"
                . "crr_unit,"
                . "reg_date,"
                . "reg_by,"
                . "update_on,"
                . "update_by,"
                . "lat,"
                . "lng,"
                . "house_id,"
                . "addr_desc,"
                . "is_garbage,"
                . "mt_ste,"
                . "mt_ext1,"
                . "mt_ext2,"
                . "mt_ext3,"
                . "mt_ext4,"
                . "mt_ext5,"
                . "mt_extn1,"
                . "mt_extn2,"
                . "mt_extn3,"
                . "mt_extn4,"
                . "mt_extn5"
                . ")values("
                . "'" . $obj['mt_id'] . "',"
                . "'" . $obj['ps_code'] . "',"
                . "'" . $obj['z_code'] . "',"
                . "'" . $obj['mt_desc'] . "',"
                . "'" . $obj['crr_unit'] . "',"
                . "'" . $obj['reg_date'] . "',"
                . "'" . $obj['reg_by'] . "',"
                . "'" . $obj['update_on'] . "',"
                . "'" . $obj['update_by'] . "',"
                . "'" . $obj['lat'] . "',"
                . "'" . $obj['lng'] . "',"
                . "'" . $obj['house_id'] . "',"
                . "'" . $obj['addr_desc'] . "',"
                . "'" . $obj['is_garbage'] . "',"
                . "'" . $obj['mt_ste'] . "',"
                . "'" . $obj['mt_ext1'] . "',"
                . "'" . $obj['mt_ext2'] . "',"
                . "'" . $obj['mt_ext3'] . "',"
                . "'" . $obj['mt_ext4'] . "',"
                . "'" . $obj['mt_ext5'] . "',"
                . "'" . $obj['mt_extn1'] . "',"
                . "'" . $obj['mt_extn2'] . "',"
                . "'" . $obj['mt_extn3'] . "',"
                . "'" . $obj['mt_extn4'] . "',"
                . "'" . $obj['mt_extn5'] . "')";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function IS_HOUSE_ID($obj) {
        $query = "select * from miter_water where house_id='" . $obj['house_id'] . "' and z_code='" . $obj['z_code'] . "' and mt_ste<>'0'";
        $rs = mysqli_query($GLOBALS['con'], $query);
        
        //APPEND_LOG($file, $cm, $message)
        
        return mysqli_num_rows($rs);
    }

    public static function CHANGE($obj) {
        $query = "update miter_water set "
                . "ps_code='" . $obj['ps_code'] . "',"
                . "z_code='" . $obj['z_code'] . "',"
                . "mt_desc='" . $obj['mt_desc'] . "',"
                . "crr_unit='" . $obj['crr_unit'] . "',"
                . "reg_date='" . $obj['reg_date'] . "',"
                . "reg_by='" . $obj['reg_by'] . "',"
                . "update_on='" . $obj['update_on'] . "',"
                . "update_by='" . $obj['update_by'] . "',"
                . "lat='" . $obj['lat'] . "',"
                . "lng='" . $obj['lng'] . "',"
                . "house_id='" . $obj['house_id'] . "',"
                . "addr_desc='" . $obj['addr_desc'] . "',"
                . "is_garbage='" . $obj['is_garbage'] . "',"
                . "mt_ste='" . $obj['mt_ste'] . "',"
                . "mt_ext1='" . $obj['mt_ext1'] . "',"
                . "mt_ext2='" . $obj['mt_ext2'] . "',"
                . "mt_ext3='" . $obj['mt_ext3'] . "',"
                . "mt_ext4='" . $obj['mt_ext4'] . "',"
                . "mt_ext5='" . $obj['mt_ext5'] . "',"
                . "mt_extn1='" . $obj['mt_extn1'] . "',"
                . "mt_extn2='" . $obj['mt_extn2'] . "',"
                . "mt_extn3='" . $obj['mt_extn3'] . "',"
                . "mt_extn4='" . $obj['mt_extn4'] . "',"
                . "mt_extn5='" . $obj['mt_extn5'] . "'"
                . " where mt_id ='" . $obj['mt_id'] . "'";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function DEL($obj) {
        $query = "update miter_water set z_code='0' "
                . " where mt_id ='" . $obj['mt_id'] . "'";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function DISPLAY($obj) {
        $query = "select miter_water.mt_id,
                miter_water.ps_code,
                miter_water.z_code,
                miter_water.mt_desc,
                miter_water.crr_unit,
                miter_water.reg_date,
                miter_water.reg_by,
                miter_water.update_on,
                miter_water.update_by,
                miter_water.lat,
                miter_water.lng,
                miter_water.house_id,
                miter_water.addr_desc,
                miter_water.is_garbage,
                miter_water.mt_ste,
                miter_water.mt_ext1,
                miter_water.mt_ext2,
                miter_water.mt_ext3,
                miter_water.mt_ext4,
                miter_water.mt_ext5,
                miter_water.mt_extn1,
                miter_water.mt_extn2,
                miter_water.mt_extn3,
                miter_water.mt_extn4,
                miter_water.mt_extn5,
                person.ps_name from miter_water
                  INNER JOIN person ON (miter_water.ps_code = person.ps_code)  where mt_id ='" . $obj['mt_id'] . "'";
        $arr = array(
            "mt_id" => "",
            "ps_code" => "",
            "ps_name" => "",
            "z_code" => "",
            "mt_desc" => "",
            "crr_unit" => "",
            "reg_date" => "",
            "reg_by" => "",
            "update_on" => "",
            "update_by" => "",
            "lat" => "",
            "lng" => "",
            "house_id" => "",
            "addr_desc" => "",
            "is_garbage" => "",
            "mt_ste" => "",
            "mt_ext1" => "",
            "mt_ext2" => "",
            "mt_ext3" => "",
            "mt_ext4" => "",
            "mt_ext5" => "",
            "mt_extn1" => "",
            "mt_extn2" => "",
            "mt_extn3" => "",
            "mt_extn4" => "",
            "mt_extn5" => ""
        );
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            $arr["mt_id"] = $data['mt_id'];
            $arr["ps_code"] = $data['ps_code'];
            $arr["z_code"] = $data['z_code'];
            $arr['ps_name'] = $data['ps_name'];
            $arr["mt_desc"] = $data['mt_desc'];
            $arr["crr_unit"] = $data['crr_unit'];
            $arr["reg_date"] = $data['reg_date'];
            $arr["reg_by"] = $data['reg_by'];
            $arr["update_on"] = $data['update_on'];
            $arr["update_by"] = $data['update_by'];
            $arr["lat"] = $data['lat'];
            $arr["lng"] = $data['lng'];
            $arr["house_id"] = $data['house_id'];
            $arr["addr_desc"] = $data['addr_desc'];
            $arr["is_garbage"] = $data['is_garbage'];
            $arr["mt_ste"] = $data['mt_ste'];
            $arr["mt_ext1"] = $data['mt_ext1'];
            $arr["mt_ext2"] = $data['mt_ext2'];
            $arr["mt_ext3"] = $data['mt_ext3'];
            $arr["mt_ext4"] = $data['mt_ext4'];
            $arr["mt_ext5"] = $data['mt_ext5'];
            $arr["mt_extn1"] = $data['mt_extn1'];
            $arr["mt_extn2"] = $data['mt_extn2'];
            $arr["mt_extn3"] = $data['mt_extn3'];
            $arr["mt_extn4"] = $data['mt_extn4'];
            $arr["mt_extn5"] = $data['mt_extn5'];
        }
        return $arr;
    }

    public static function LOAD($obj) {
        $query = "select "
                . " mt_id   ,  "
                . " ps_code   ,  "
                . " z_code   ,  "
                . " mt_desc   ,  "
                . " crr_unit   ,  "
                . " reg_date   ,  "
                . " reg_by   ,  "
                . " update_on   ,  "
                . " update_by   ,  "
                . " lat   ,  "
                . " lng   ,  "
                . " house_id   ,  "
                . " addr_desc   ,  "
                . " is_garbage   ,  "
                . " mt_ste   ,  "
                . " mt_ext1   ,  "
                . " mt_ext2   ,  "
                . " mt_ext3   ,  "
                . " mt_ext4   ,  "
                . " mt_ext5   ,  "
                . " mt_extn1   ,  "
                . " mt_extn2   ,  "
                . " mt_extn3   ,  "
                . " mt_extn4   ,  "
                . " mt_extn5  "
                . " from miter_water ";
        $arr = array();
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            array_push($arr, array(
                "mt_id" => $data['mt_id'],
                "ps_code" => $data['ps_code'],
                "z_code" => $data['z_code'],
                "mt_desc" => $data['mt_desc'],
                "crr_unit" => $data['crr_unit'],
                "reg_date" => $data['reg_date'],
                "reg_by" => $data['reg_by'],
                "update_on" => $data['update_on'],
                "update_by" => $data['update_by'],
                "lat" => $data['lat'],
                "lng" => $data['lng'],
                "house_id" => $data['house_id'],
                "addr_desc" => $data['addr_desc'],
                "is_garbage" => $data['is_garbage'],
                "mt_ste" => $data['mt_ste'],
                "mt_ext1" => $data['mt_ext1'],
                "mt_ext2" => $data['mt_ext2'],
                "mt_ext3" => $data['mt_ext3'],
                "mt_ext4" => $data['mt_ext4'],
                "mt_ext5" => $data['mt_ext5'],
                "mt_extn1" => $data['mt_extn1'],
                "mt_extn2" => $data['mt_extn2'],
                "mt_extn3" => $data['mt_extn3'],
                "mt_extn4" => $data['mt_extn4'],
                "mt_extn5" => $data['mt_extn5']
            ));
        }
        return $arr;
    }

    public static function LOAD1($obj) {

        $query = "SELECT 
        miter_water.mt_id,
        person.ps_name,
        miter_zone.z_desc,
        miter_water.crr_unit,
        miter_water.house_id,
        miter_water.lat,
        miter_water.lng,
        miter_water.is_garbage,
        miter_water.mt_ste
        FROM
        miter_zone
        INNER JOIN miter_water ON (miter_zone.z_code = miter_water.z_code)
        INNER JOIN person ON (miter_water.ps_code = person.ps_code) 
        where   miter_water.mt_ste <>'0'";
        
        if(strlen($obj['z_code'])>0){
            $query .=" and miter_water.z_code='".$obj['z_code']."' ";
        }

        $arr = array();
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            array_push($arr, array(
                "mt_id" => $data['mt_id'],
                "ps_name" => $data['ps_name'],
                "z_desc" => $data['z_desc'],
                "crr_unit" => $data['crr_unit'],
                "house_id" => $data['house_id'],
                "lat" => $data['lat'],
                "lng" => $data['lng'],
                "is_garbage" => $data['is_garbage'],
                "mt_ste" => $data['mt_ste'],
                "mt_ste_desc" => MITER_WATER::STE_DESC($data['mt_ste']),
                "is_garbage_desc" => MITER_WATER::GARBAGE_DESC($data['is_garbage'])
            ));
        }
        return $arr;
    }

    
     public static function LOAD_ZONE($obj) {
        $query = "select "
                . " mt_id   "
          
                . " from miter_water where ps_code='".$obj['ps_code']."' and z_code='".$obj['z_code']."' and mt_ste <>'0'";
        $arr = array();
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            array_push($arr, array(
                "mt_id" => $data['mt_id'],
             
            ));
        }
        return $arr;
    }
    
    public static function GARBAGE_DESC($code) {
        if ($code == '1') {
            return "ใช้";
        } else {
            return "ไม่ใช้";
        }
    }

    public static function STE_DESC($code) {
        if ($code == '1') {
            return "ปกติ";
        } else if ($code == '2') {
            return "โดนตัด";
        } else {
            return "ยกเลิก";
        }
    }

}
