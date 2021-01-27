<?php

class CUSTOMER_TYPE {

    public static function CREATE($obj) {
        
        $obj['ctype_code'] = AUTO_RUN("ctype_code", "customer_type", 2);
        
        
        $query = "insert into customer_type ("
                . "ctype_code,"
                . "ctype_desc,"
                . "ctype_create_on,"
                . "ctype_update_on,"
                . "ctype_create_by,"
                . "ctype_update_by,"
                . "ctype_ste"
                . ")values("
                . "'" . $obj['ctype_code'] . "',"
                . "'" . $obj['ctype_desc'] . "',"
                . "'" . $obj['ctype_create_on'] . "',"
                . "'" . $obj['ctype_update_on'] . "',"
                . "'" . $obj['ctype_create_by'] . "',"
                . "'" . $obj['ctype_update_by'] . "',"
                . "'" . $obj['ctype_ste'] . "')";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function CHANGE($obj) {
        $query = "update customer_type set "
                . "ctype_desc='" . $obj['ctype_desc'] . "',"
                . "ctype_create_on='" . $obj['ctype_create_on'] . "',"
                . "ctype_update_on='" . $obj['ctype_update_on'] . "',"
                . "ctype_create_by='" . $obj['ctype_create_by'] . "',"
                . "ctype_update_by='" . $obj['ctype_update_by'] . "',"
                . "ctype_ste='" . $obj['ctype_ste'] . "'"
                . " where ctype_code ='" . $obj['ctype_code'] . "'";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function DEL($obj) {
        $query = "delete from customer_type "
                . " where ctype_code ='" . $obj['ctype_code'] . "'";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function DISPLAY($obj) {
        $query = "select * from customer_type "
                . " where ctype_code ='" . $obj['ctype_code'] . "'";
        $arr = array(
            "ctype_code" => "",
            "ctype_desc" => "",
            "ctype_create_on" => "",
            "ctype_update_on" => "",
            "ctype_create_by" => "",
            "ctype_update_by" => "",
            "ctype_ste" => ""
        );
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            $arr["ctype_code"] = $data['ctype_code'];
            $arr["ctype_desc"] = $data['ctype_desc'];
            $arr["ctype_create_on"] = $data['ctype_create_on'];
            $arr["ctype_update_on"] = $data['ctype_update_on'];
            $arr["ctype_create_by"] = $data['ctype_create_by'];
            $arr["ctype_update_by"] = $data['ctype_update_by'];
            $arr["ctype_ste"] = $data['ctype_ste'];
        }
        return $arr;
    }

    public static function LOAD($obj) {
        $query = "select "
                . " ctype_code   ,  "
                . " ctype_desc   ,  "
                . " ctype_create_on   ,  "
                . " ctype_update_on   ,  "
                . " ctype_create_by   ,  "
                . " ctype_update_by   ,  "
                . " ctype_ste  "
                . " from customer_type where ctype_ste='1'";
        $arr = array();
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            array_push($arr, array(
                "ctype_code" => $data['ctype_code'],
                "ctype_desc" => $data['ctype_desc'],
                "ctype_create_on" => $data['ctype_create_on'],
                "ctype_update_on" => $data['ctype_update_on'],
                "ctype_create_by" => $data['ctype_create_by'],
                "ctype_update_by" => $data['ctype_update_by'],
                "ctype_ste" => $data['ctype_ste']
            ));
        }
        return $arr;
    }

}
