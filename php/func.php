<?php

function AUTO_RUN($field, $tb_name, $digit) {
    $query = "select  MAX( " . $field . " ) AS m from " . $tb_name . "";

    $result = mysqli_query($GLOBALS['con'], $query);
    $max = mysqli_fetch_array($result);
    $number = "";
    if (is_numeric($max[0]) == false) {
        $number = sprintf('%0' . $digit . 'd', 1);
    } else {
        $number = intval($max[0]) + 1;
        $number = sprintf('%0' . $digit . 'd', $number);
    }

    return $number;
}

function AUTO_RUN_CH($field, $tb_name, $digit,$ch) {
    //$query = "select  MAX( " . $field . " ) AS m from " . $tb_name . "";
    $y = substr((date('Y') + 543), 2);
    $query = "select max( substring(`munit_number`,4,10)) as m from miter_unit  
    where substring(`munit_number`,1,3)='".$ch.$y."'";
    $result = mysqli_query($GLOBALS['con'], $query);
    $max = mysqli_fetch_array($result);
    $number = "";
    if (is_numeric($max[0]) == false) {
        $number = sprintf('%0' . $digit . 'd', 1);
    } else {
        $number = intval($max[0]) + 1;
        $number = sprintf('%0' . $digit . 'd', $number);
    }

    return $ch.$y.$number;
}

function APPEND_LOG($file, $cm, $message) {
    if ($GLOBALS['LOG_DEBUG'] == true) {
        if (!file_exists($file)) {
            fwrite($file, "User [" . $GLOBALS['USER'] . "] start create log " . "|" . date('Y-m-d H:i:s'));
            fclose($file);
        }
        file_put_contents($file, $cm . "User [" . $GLOBALS['USER'] . "] |" . date('Y-m-d H:i:s') . "|" . $message . PHP_EOL, FILE_APPEND | LOCK_EX);
    }
}
