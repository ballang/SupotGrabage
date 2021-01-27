<?php

class PERSON {

    public static function CREATE($obj) {
        $obj['ps_code'] = AUTO_RUN("ps_code", "person", 7);
        $query = "insert into person ("
                . "ps_code,"
                . "ps_name,"
                . "ctype_code,"
                . "ps_addr1,"
                . "ps_addr2,"
                . "ps_phone,"
                . "ps_line,"
                . "ps_tax,"
                . "ps_create_on,"
                . "ps_update_on,"
                . "ps_create_by,"
                . "ps_update_by,"
                . "ps_img,"
                . "ps_ext1,"
                . "ps_ext2,"
                . "ps_ext3,"
                . "ps_ext4,"
                . "ps_ext5,"
                . "ps_extn1,"
                . "ps_extn2,"
                . "ps_extn3,"
                . "ps_extn4,"
                . "ps_extn5,"
                . "ps_ste"
                . ")values("
                . "'" . $obj['ps_code'] . "',"
                . "'" . $obj['ps_name'] . "',"
                . "'" . $obj['ctype_code'] . "',"
                . "'" . $obj['ps_addr1'] . "',"
                . "'" . $obj['ps_addr2'] . "',"
                . "'" . $obj['ps_phone'] . "',"
                . "'" . $obj['ps_line'] . "',"
                . "'" . $obj['ps_tax'] . "',"
                . "'" . $obj['ps_create_on'] . "',"
                . "'" . $obj['ps_update_on'] . "',"
                . "'" . $obj['ps_create_by'] . "',"
                . "'" . $obj['ps_update_by'] . "',"
                . "'" . $obj['ps_img'] . "',"
                . "'" . $obj['ps_ext1'] . "',"
                . "'" . $obj['ps_ext2'] . "',"
                . "'" . $obj['ps_ext3'] . "',"
                . "'" . $obj['ps_ext4'] . "',"
                . "'" . $obj['ps_ext5'] . "',"
                . "'" . $obj['ps_extn1'] . "',"
                . "'" . $obj['ps_extn2'] . "',"
                . "'" . $obj['ps_extn3'] . "',"
                . "'" . $obj['ps_extn4'] . "',"
                . "'" . $obj['ps_extn5'] . "',"
                . "'" . $obj['ps_ste'] . "')";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function CHANGE($obj) {
        $query = "update person set "
                . "ps_name='" . $obj['ps_name'] . "',"
                . "ctype_code='" . $obj['ctype_code'] . "',"
                . "ps_addr1='" . $obj['ps_addr1'] . "',"
                . "ps_addr2='" . $obj['ps_addr2'] . "',"
                . "ps_phone='" . $obj['ps_phone'] . "',"
                . "ps_line='" . $obj['ps_line'] . "',"
                . "ps_tax='" . $obj['ps_tax'] . "',"
                . "ps_create_on='" . $obj['ps_create_on'] . "',"
                . "ps_update_on='" . $obj['ps_update_on'] . "',"
                . "ps_create_by='" . $obj['ps_create_by'] . "',"
                . "ps_update_by='" . $obj['ps_update_by'] . "',"
                . "ps_img='" . $obj['ps_img'] . "',"
                . "ps_ext1='" . $obj['ps_ext1'] . "',"
                . "ps_ext2='" . $obj['ps_ext2'] . "',"
                . "ps_ext3='" . $obj['ps_ext3'] . "',"
                . "ps_ext4='" . $obj['ps_ext4'] . "',"
                . "ps_ext5='" . $obj['ps_ext5'] . "',"
                . "ps_extn1='" . $obj['ps_extn1'] . "',"
                . "ps_extn2='" . $obj['ps_extn2'] . "',"
                . "ps_extn3='" . $obj['ps_extn3'] . "',"
                . "ps_extn4='" . $obj['ps_extn4'] . "',"
                . "ps_extn5='" . $obj['ps_extn5'] . "',"
                . "ps_ste='" . $obj['ps_ste'] . "'"
                . " where ps_code ='" . $obj['ps_code'] . "'";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function DEL($obj) {
        /* $query = "delete from person "
          . " where ps_code ='" . $obj['ps_code'] . "'"; */
        $query = "update person set ps_ste='0',"
                . "ps_update_on='" . $obj['ps_update_on'] . "',"
                . "ps_update_by='" . $obj['ps_update_by'] . "' "
                . " where ps_code ='" . $obj['ps_code'] . "'";
        if (mysqli_query($GLOBALS['con'], $query)) {
            return 1;
        } else {
            return 0;
        }
    }

    public static function DISPLAY($obj) {
        $query = "select * from person "
                . " where ps_code ='" . $obj['ps_code'] . "'";
        $arr = array(
            "ps_code" => "",
            "ps_name" => "",
            "ctype_code" => "",
            "ps_addr1" => "",
            "ps_addr2" => "",
            "ps_phone" => "",
            "ps_line" => "",
            "ps_tax" => "",
            "ps_create_on" => "",
            "ps_update_on" => "",
            "ps_create_by" => "",
            "ps_update_by" => "",
            "ps_img" => "",
            "ps_ext1" => "",
            "ps_ext2" => "",
            "ps_ext3" => "",
            "ps_ext4" => "",
            "ps_ext5" => "",
            "ps_extn1" => "",
            "ps_extn2" => "",
            "ps_extn3" => "",
            "ps_extn4" => "",
            "ps_extn5" => "",
            "ps_ste" => ""
        );
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            $arr["ps_code"] = $data['ps_code'];
            $arr["ps_name"] = $data['ps_name'];
            $arr["ctype_code"] = $data['ctype_code'];
            $arr["ps_addr1"] = $data['ps_addr1'];
            $arr["ps_addr2"] = $data['ps_addr2'];
            $arr["ps_phone"] = $data['ps_phone'];
            $arr['ps_line'] = $data['ps_line'];
            $arr["ps_tax"] = $data['ps_tax'];
            $arr["ps_create_on"] = $data['ps_create_on'];
            $arr["ps_update_on"] = $data['ps_update_on'];
            $arr["ps_create_by"] = $data['ps_create_by'];
            $arr["ps_update_by"] = $data['ps_update_by'];
            $arr['ps_img'] = $data['ps_img'];
            $arr["ps_ext1"] = $data['ps_ext1'];
            $arr["ps_ext2"] = $data['ps_ext2'];
            $arr["ps_ext3"] = $data['ps_ext3'];
            $arr["ps_ext4"] = $data['ps_ext4'];
            $arr["ps_ext5"] = $data['ps_ext5'];
            $arr["ps_extn1"] = $data['ps_extn1'];
            $arr["ps_extn2"] = $data['ps_extn2'];
            $arr["ps_extn3"] = $data['ps_extn3'];
            $arr["ps_extn4"] = $data['ps_extn4'];
            $arr["ps_extn5"] = $data['ps_extn5'];
            $arr["ps_ste"] = $data['ps_ste'];
        }
        return $arr;
    }

    public static function LOAD($obj) {
        $query = "select "
                . " ps_code   ,  "
                . " ps_name   ,  "
                . " ctype_code   ,  "
                . " ps_addr1   ,  "
                . " ps_addr2   ,  "
                . " ps_phone   ,  "
                . "ps_line,"
                . " ps_tax   ,  "
                . " ps_create_on   ,  "
                . " ps_update_on   ,  "
                . " ps_create_by   ,  "
                . " ps_update_by   ,  "
                . "ps_img,"
                . " ps_ext1   ,  "
                . " ps_ext2   ,  "
                . " ps_ext3   ,  "
                . " ps_ext4   ,  "
                . " ps_ext5   ,  "
                . " ps_extn1   ,  "
                . " ps_extn2   ,  "
                . " ps_extn3   ,  "
                . " ps_extn4   ,  "
                . " ps_extn5   ,  "
                . " ps_ste  "
                . " from person ";
        $arr = array();
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            array_push($arr, array(
                "ps_code" => $data['ps_code'],
                "ps_name" => $data['ps_name'],
                "ctype_code" => $data['ctype_code'],
                "ps_addr1" => $data['ps_addr1'],
                "ps_addr2" => $data['ps_addr2'],
                "ps_phone" => $data['ps_phone'],
                "ps_line" => $data['ps_line'],
                "ps_tax" => $data['ps_tax'],
                "ps_create_on" => $data['ps_create_on'],
                "ps_update_on" => $data['ps_update_on'],
                "ps_create_by" => $data['ps_create_by'],
                "ps_update_by" => $data['ps_update_by'],
                "ps_img" => $data['ps_img'],
                "ps_ext1" => $data['ps_ext1'],
                "ps_ext2" => $data['ps_ext2'],
                "ps_ext3" => $data['ps_ext3'],
                "ps_ext4" => $data['ps_ext4'],
                "ps_ext5" => $data['ps_ext5'],
                "ps_extn1" => $data['ps_extn1'],
                "ps_extn2" => $data['ps_extn2'],
                "ps_extn3" => $data['ps_extn3'],
                "ps_extn4" => $data['ps_extn4'],
                "ps_extn5" => $data['ps_extn5'],
                "ps_ste" => $data['ps_ste']
            ));
        }
        return $arr;
    }

    public static function LOAD1() {
        $query = "SELECT 
        person.ps_code,
        person.ps_name,
        customer_type.ctype_desc,
        person.ps_line,
        person.ps_phone,
        person.ps_tax
        FROM
        customer_type
        INNER JOIN person ON (customer_type.ctype_code = person.ctype_code)";
        $arr = array();
        $rs = mysqli_query($GLOBALS['con'], $query);
        while ($data = mysqli_fetch_array($rs)) {
            array_push($arr, array(
                "ps_code" => $data['ps_code'],
                "ps_name" => $data['ps_name'],
                "ctype_desc" => $data['ctype_desc'],
                "ps_line" => $data['ps_line'],
                "ps_phone" => $data['ps_phone'],
                "ps_tax" => $data['ps_tax"']
            ));
        }
        return $arr;
    }

}
