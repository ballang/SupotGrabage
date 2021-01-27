<?php

$tb = (isset($_GET['tb'])) ? $_GET['tb'] : '';
if (strlen($tb) > 0) {
    include './core.php';
    if ($tb == "loop") {
        $query = "SELECT *
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA = '" . $db . "'";
        $rs = mysqli_query($con, $query);
        while ($data = mysqli_fetch_array($rs)) {
            gen_code($data['TABLE_NAME'], $db, $con);
        }
    } else {
        gen_code($tb, $db, $con);
    }
}

//write class
function gen_code($tb, $db, $con) {



    if (strlen($tb) > 0) {

        $query = "SELECT *
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA = '" . $db . "' AND TABLE_NAME = '" . $tb . "'";
        $rs = mysqli_query($con, $query);
        $field = array();
        $field_data = array();
        $field_pri = array();
        $field_comm = array();

        while ($data = mysqli_fetch_array($rs)) {
            echo $data['COLUMN_KEY'];
            array_push($field, array("name" => $data['COLUMN_NAME'], "COLUMN_KEY" => $data['COLUMN_KEY'], "TEXT" => $data['COLUMN_COMMENT']));
            if (strlen($data['COLUMN_KEY']) == 0) {
                array_push($field_data, array("name" => $data['COLUMN_NAME'], "TEXT" => $data['COLUMN_COMMENT']));
            }
            array_push($field_comm, array("name" => $data['COLUMN_COMMENT']));
            if ($data['COLUMN_KEY'] == "PRI") {
                array_push($field_pri, array("name" => $data['COLUMN_NAME']));
            }
        }



        $query_tb_comm = "SELECT table_comment 
    FROM INFORMATION_SCHEMA.TABLES 
    WHERE table_schema='" . $db . "' 
        AND table_name='" . $tb . "';";
        $rs_tb_comm = mysqli_query($con, $query_tb_comm);
        $tb_commane = "";
        $data_comm = mysqli_fetch_array($rs);
        $tb_commane = $data_comm['table_comment'];
        //print_r($field);
        // head class
        $file_text = "<?php \r\n";
        $file_text .= " class " . strtoupper($tb) . "{\r\n";

        // create
        $file_text .= "public static function CREATE(\$obj){\r\n";

        $file_text .= "\$query = \"insert into " . $tb . " (\"\r\n";
        for ($i = 0; $i < count($field); $i++) {
            if ($i == count($field) - 1) {
                $file_text .= ". \"" . $field[$i]['name'] . "\"\r\n";
            } else {
                $file_text .= ". \"" . $field[$i]['name'] . ",\"\r\n";
            }
        }
        $file_text .= ".\")values(\"\r\n";
        for ($i = 0; $i < count($field); $i++) {
            if ($i == count($field) - 1) {
                $file_text .= ". \"'\".\$obj['" . $field[$i]['name'] . "'].\"')\";\r\n";
            } else {
                $file_text .= ". \"'\".\$obj['" . $field[$i]['name'] . "'].\"',\"\r\n";
            }
        }

        $file_text .= "if (mysqli_query(\$GLOBALS['con'], \$query)) {\r\n";
        $file_text .= "return 1;\r\n";
        $file_text .= "} else {\r\n";
        $file_text .= "return 0;\r\n";
        $file_text .= "}\r\n";



        $file_text .= "}\r\n";
        //end create
        //change 
        $file_text .= "public static function CHANGE(\$obj){\r\n";
        $file_text .= "\$query = \"update " . $tb . " set \"\r\n";
        for ($i = 0; $i < count($field_data); $i++) {
            if ($i == count($field_data) - 1) {
                $file_text .= ".\"" . $field_data[$i]['name'] . "='\".\$obj['" . $field_data[$i]['name'] . "'].\"'\" \r\n";
            } else {
                $file_text .= ". \"" . $field_data[$i]['name'] . "='\".\$obj['" . $field_data[$i]['name'] . "'].\"',\"\r\n";
            }
        }
        if (count($field_pri) == 1) {
            $file_text .= " . \" where " . $field[0]['name'] . " ='\".\$obj['" . $field[0]['name'] . "'].\"'\";\r\n";
        } else if (count($field_pri) == 2) {
            $file_text .= " . \" where " . $field[0]['name'] . " ='\".\$obj['" . $field[0]['name'] . "'].\"'\"\r\n";
            $file_text .= " . \" and " . $field[1]['name'] . " ='\".\$obj['" . $field[1]['name'] . "'].\"'\";\r\n";
        } else if (count($field_pri) == 3) {
            $file_text .= " . \" where " . $field[0]['name'] . " ='\".\$obj['" . $field[0]['name'] . "'].\"'\"\r\n";
            $file_text .= " . \" and " . $field[1]['name'] . " ='\".\$obj['" . $field[1]['name'] . "'].\"'\" \r\n";
            $file_text .= " . \" and " . $field[2]['name'] . " ='\".\$obj['" . $field[2]['name'] . "'].\"'\";\r\n";
        } else {
            
        }
        $file_text .= "if (mysqli_query(\$GLOBALS['con'], \$query)) {\r\n";
        $file_text .= "return 1;\r\n";
        $file_text .= "} else {\r\n";
        $file_text .= "return 0;\r\n";
        $file_text .= "}\r\n";


        $file_text .= "}\r\n";

        // end change


        $file_text .= "public static function DEL(\$obj){\r\n";

        $file_text .= "\$query = \"delete from " . $tb . " \"\r\n";
        if (count($field_pri) == 1) {
            $file_text .= " . \" where " . $field[0]['name'] . " ='\".\$obj['" . $field[0]['name'] . "'].\"'\";\r\n";
        } else if (count($field_pri) == 2) {
            $file_text .= " . \" where " . $field[0]['name'] . " ='\".\$obj['" . $field[0]['name'] . "'].\"'\"\r\n";
            $file_text .= " . \" and " . $field[1]['name'] . " ='\".\$obj['" . $field[1]['name'] . "'].\"'\";\r\n";
        } else if (count($field_pri) == 3) {
            $file_text .= " . \" where " . $field[0]['name'] . " ='\".\$obj['" . $field[0]['name'] . "'].\"'\"\r\n";
            $file_text .= " . \" and " . $field[1]['name'] . " ='\".\$obj['" . $field[1]['name'] . "'].\"'\" \r\n";
            $file_text .= " . \" and " . $field[2]['name'] . " ='\".\$obj['" . $field[2]['name'] . "'].\"'\";\r\n";
        } else {
            
        }

        $file_text .= "if (mysqli_query(\$GLOBALS['con'], \$query)) {\r\n";
        $file_text .= "return 1;\r\n";
        $file_text .= "} else {\r\n";
        $file_text .= "return 0;\r\n";
        $file_text .= "}\r\n";

        $file_text .= "}\r\n";
        // display

        $file_text .= "public static function DISPLAY(\$obj){\r\n";

        $file_text .= "\$query = \"select * from " . $tb . " \"\r\n";
        if (count($field_pri) == 1) {
            $file_text .= " . \" where " . $field[0]['name'] . " ='\".\$obj['" . $field[0]['name'] . "'].\"'\";\r\n";
        } else if (count($field_pri) == 2) {
            $file_text .= " . \" where " . $field[0]['name'] . " ='\".\$obj['" . $field[0]['name'] . "'].\"'\"\r\n";
            $file_text .= " . \" and " . $field[1]['name'] . " ='\".\$obj['" . $field[1]['name'] . "'].\"'\";\r\n";
        } else if (count($field_pri) == 3) {
            $file_text .= " . \" where " . $field[0]['name'] . " ='\".\$obj['" . $field[0]['name'] . "'].\"'\"\r\n";
            $file_text .= " . \" and " . $field[1]['name'] . " ='\".\$obj['" . $field[1]['name'] . "'].\"'\" \r\n";
            $file_text .= " . \" and " . $field[2]['name'] . " ='\".\$obj['" . $field[2]['name'] . "'].\"'\";\r\n";
        } else {
            
        }

        $file_text .= "\$arr = array(\r\n";
        for ($i = 0; $i < count($field); $i++) {
            if ($i == count($field) - 1) {
                $file_text .= "\"" . $field[$i]['name'] . "\"=>\"\"\r\n";
            } else {
                $file_text .= "\"" . $field[$i]['name'] . "\"=>\"\",\r\n";
            }
        }

        $file_text .= ");\r\n";

        $file_text .= "\$rs = mysqli_query(\$GLOBALS['con'], \$query);\r\n";
        $file_text .= " while (\$data = mysqli_fetch_array(\$rs)) {\r\n";
        for ($i = 0; $i < count($field); $i++) {
            $file_text .= " \$arr[\"" . $field[$i]['name'] . "\"] = \$data['" . $field[$i]['name'] . "'];\r\n";
        }
        $file_text .= "}\r\n";
        $file_text .= "return \$arr;\r\n";
        $file_text .= "}\r\n";

        //display
        // 
        // load
        $file_text .= "public static function LOAD(\$obj){\r\n";

        $file_text .= " \$query = \"select \" \r\n";

        for ($i = 0; $i < count($field); $i++) {

            if ($i == count($field) - 1) {
                $file_text .= " . \" " . $field[$i]['name'] . "  \"\r\n";
            } else {
                $file_text .= " . \" " . $field[$i]['name'] . "   ,  \"\r\n";
            }
        }
        $file_text .= ".\" from " . $tb . " \";\r\n";

        $file_text .= "\$arr = array();\r\n";

        $file_text .= "\$rs = mysqli_query(\$GLOBALS['con'], \$query);\r\n";
        $file_text .= " while (\$data = mysqli_fetch_array(\$rs)) {\r\n";
        $file_text .= "array_push(\$arr, array(\r\n";
        for ($i = 0; $i < count($field); $i++) {

            if ($i == count($field) - 1) {
                $file_text .= "\"" . $field[$i]['name'] . "\" => \$data['" . $field[$i]['name'] . "'] \r\n";
            } else {
                $file_text .= "\"" . $field[$i]['name'] . "\"=> \$data['" . $field[$i]['name'] . "'] ,  \r\n";
            }
        }

        $file_text .= "));\r\n";

        $file_text .= "}\r\n";
        $file_text .= "return \$arr;\r\n";
        $file_text .= "}\r\n";
        // load
        //end class
        $file_text .= "}";
        //end class
        // write file class.php
        $class_file = fopen("./class/" . $tb . ".php", "w");
        fwrite($class_file, $file_text);
        fclose($class_file);
        // write file class.php

        $file_text = "<?php \r\n";

        $file_text .= "include './ini.php';\r\n";
        $file_text .= "include '../class/" . $tb . ".php';\r\n";
        $file_text .= "\$cm = (isset(\$_GET['cm'])) ? \$_GET['cm'] : '';\r\n";
        for ($i = 0; $i < count($field); $i++) {
            $file_text .= "\$" . $field[$i]['name'] . " = (isset(\$_GET['" . $field[$i]['name'] . "'])) ? \$_GET['" . $field[$i]['name'] . "'] : '';\r\n";
        }

        $file_text .= "\$obj = array(\r\n";
        for ($i = 0; $i < count($field); $i++) {
            if ($i == count($field) - 1) {
                $file_text .= "\"" . $field[$i]['name'] . "\" => \$" . $field[$i]['name'] . "\r\n";
            } else {
                $file_text .= "\"" . $field[$i]['name'] . "\"=> \$" . $field[$i]['name'] . ",\r\n";
            }
        }
        $file_text .= ");\r\n";

        $file_text .= "switch (\$cm) {\r\n";
        //create
        $file_text .= "case \"create\":\r\n";

        $file_text .= "\$rs = " . strtoupper($tb) . "::CREATE(\$obj);\r\n";
        $file_text .= "if (\$rs == 1) {\r\n";
        $file_text .= "echo json_encode(array(\"status\" => \"1\", \"message\" => \"บันทึกข้อมูลสำเร็จ\"));\r\n";
        $file_text .= "} else {\r\n";
        $file_text .= "echo json_encode(array(\"status\" => \"0\", \"message\" => \"ไม่สามารถบันทึกข้อมูลได้\"));\r\n";
        $file_text .= "}\r\n";
        $file_text .= "break;\r\n";
        //create
        //delete
        $file_text .= "case \"del\":\r\n";
        $file_text .= "\$rs = " . strtoupper($tb) . "::DEL(\$obj);\r\n";
        $file_text .= "if (\$rs == 1) {\r\n";
        $file_text .= "echo json_encode(array(\"status\" => \"1\", \"message\" => \"ลบข้อมูลสำเร็จ\"));\r\n";
        $file_text .= "} else {\r\n";
        $file_text .= "echo json_encode(array(\"status\" => \"0\", \"message\" => \"ไม่สามารถลบข้อมูลได้\"));\r\n";
        $file_text .= "}\r\n";

        $file_text .= "break;\r\n";
        //delete
        //change
        $file_text .= "case \"change\":\r\n";
        $file_text .= "\$rs = " . strtoupper($tb) . "::CHANGE(\$obj);\r\n";
        $file_text .= "if (\$rs == 1) {\r\n";
        $file_text .= "echo json_encode(array(\"status\" => \"1\", \"message\" => \"บันทึกข้อมูลสำเร็จ\"));\r\n";
        $file_text .= "} else {\r\n";
        $file_text .= "echo json_encode(array(\"status\" => \"0\", \"message\" => \"ไม่สามารถลบข้อมูลได้\"));\r\n";
        $file_text .= "}\r\n";

        $file_text .= "break;\r\n";
        //change
        //read
        $file_text .= "case \"read\":\r\n";
        $file_text .= "echo json_encode(array(\"status\" => \"1\", \"message\" => \"success\", \"data\" => " . strtoupper($tb) . "::DISPLAY(\$obj)));\r\n";
        $file_text .= "break;\r\n";
        //
        //read
        //
    //load
        $file_text .= "case \"load\":\r\n";
        $file_text .= "echo json_encode(array(\"status\" => \"1\", \"message\" => \"success\", \"data\" => " . strtoupper($tb) . "::LOAD(\$obj)));\r\n";
        $file_text .= "break;\r\n";
        //load
        //default
        $file_text .= "default:\r\n";
        $file_text .= "echo json_encode(array(\"status\" => \"0\", \"message\" => \"Error Command\"));\r\n";
        $file_text .= "break;\r\n";
        $file_text .= "}\r\n";



        // write file api
        $api_file = fopen("./api/" . $tb . ".php", "w");
        fwrite($api_file, $file_text);
        fclose($api_file);
        // write file api
        // java script file
        $pri = "";
        for ($i = 0; $i < count($field_pri); $i++) {
            if (strlen($pri) == 0) {
                $pri .= $field_pri[$i]['name'];
            } else {
                $pri .= $pri . "," . $field_pri[$i]['name'];
            }
        }

        //
        $file_text = "\$(document).ready(function () {\r\n";
        $file_text .= "loadData();\r\n";
        $file_text .= "});\r\n";

        $file_text .= "function clearAdd() {\r\n";
        for ($i = 0; $i < count($field_data); $i++) {
            $file_text .= "\$('#add-" . $field_data[$i]['name'] . "').val(\"\");\r\n";
        }
        $file_text .= "\$('#add-field').focus();\r\n";

        $file_text .= "}\r\n";

        $file_text .= "function loadData() {\r\n";
        $file_text .= "\$('#tb-data>tbody>tr').empty();\r\n";
        $file_text .= "\$.ajax({\r\n";
        $file_text .= "url: \"php/api/" . strtolower($tb) . ".php?=\" + Math.random(),\r\n";
        $file_text .= "type: 'GET',\r\n";
        $file_text .= "data: {\r\n";
        $file_text .= "'cm': 'load'\r\n";
        $file_text .= "},\r\n";
        $file_text .= "success: function (data, textStatus, jqXHR) {\r\n";
        $file_text .= "var json = JSON.parse(data);\r\n";
        $file_text .= "for (var i = 0; i < json['data'].length; i++) {\r\n";
        $file_text .= "var row = \"<tr>\";\r\n";
        //field
        for ($i = 0; $i < count($field); $i++) {
            $file_text .= "row += \"<td>\"+json['data'][i]['" . $field[$i]['name'] . "']+\"</td>\";\r\n";
        }
        //field
        $para = "";
        for ($i = 0; $i < count($field_pri); $i++) {
            if (strlen($para) == 0) {
                $para = "'\"+json['data'][i]['" . $field_pri[$i]['name'] . "']+\"'";
            } else {
                $para .= ",'\"+json['data'][i]['" . $field_pri[$i]['name'] . "']+\"'";
            }
            //$file_text .= "var " . $field_pri[$i]['name'] . " = json['data'][i]['" . $field[$i]['name'] . "']\r\n";
        }


        $file_text .= "row += \"<td align='right'>\";\r\n";
        $file_text .= "row += \"<div class='btn-group btn-group-xs' role='group' aria-label='...' >\";\r\n";
        $file_text .= "row += \"<button onclick=\\\"openEdit(" . $para . ")\\\" type='button' class='btn btn-info btn-xs'><i class='fa fa-folder-open'></i> เปิด</button>\";\r\n";
        $file_text .= "row += \"<button onclick=\\\"del(" . $para . ")\\\" type='button' class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> ลบ</button>\";\r\n";
        $file_text .= "row += \"</div>\";\r\n";
        $file_text .= "row += \"</td>\";\r\n";
        $file_text .= "row += \"</tr>\";\r\n";
        $file_text .= "\$('#tb-data>tbody').append(row);\r\n";
        $file_text .= "}\r\n";
        $file_text .= "},\r\n";
        $file_text .= "error: function (jqXHR, textStatus, errorThrown) {\r\n";
        $file_text .= "console.log(errorThrown.toString());\r\n";
        $file_text .= "}\r\n";
        $file_text .= "});\r\n";

        $file_text .= "}\r\n";



        $file_text .= "function openEdit(" . $pri . ") {\r\n";

        $file_text .= "\$('#MD-CHANGE').modal(\"show\");\r\n";
        $file_text .= "$.ajax({\r\n";
        $file_text .= "url: \"php/api/" . strtolower($tb) . ".php?=\" + Math.random(),\r\n";
        $file_text .= "type: 'GET',\r\n";
        $file_text .= "data: {\r\n";
        $file_text .= "'cm': 'read',\r\n";
        for ($i = 0; $i < count($field_pri); $i++) {
            $file_text .= "'" . $field_pri[$i]['name'] . "': " . $field_pri[$i]['name'] . ",\r\n";
        }


        $file_text .= "},\r\n";
        $file_text .= "success: function (data, textStatus, jqXHR) {\r\n";
        $file_text .= "var json = JSON.parse(data);\r\n";
        for ($i = 0; $i < count($field); $i++) {
            $file_text .= "$('#edt-" . $field[$i]['name'] . "').val(json['data']['" . $field[$i]['name'] . "']);\r\n";
        }
        $file_text .= "},\r\n";
        $file_text .= "error: function (jqXHR, textStatus, errorThrown) {\r\n";
        $file_text .= "console.log(errorThrown.toString());\r\n";
        $file_text .= "}\r\n";
        $file_text .= "});\r\n";
        $file_text .= "}\r\n";

        $file_text .= "function saveAdd() {\r\n";

        $file_text .= "var r = confirm(\"ยืนยันการบันทึกข้อมูล ?\");\r\n";
        $file_text .= "if (r == true) {\r\n";
        $file_text .= "$.ajax({\r\n";
        $file_text .= "url: \"php/api/" . strtolower($tb) . ".php?=\" + Math.random(),\r\n";
        $file_text .= "type: 'GET',\r\n";
        $file_text .= "data: {\r\n";
        $file_text .= "'cm': 'create',\r\n";
        for ($i = 0; $i < count($field_data); $i++) {
            $file_text .= "'" . $field_data[$i]['name'] . "': \$('#add-" . $field_data[$i]['name'] . "').val(),\r\n";
        }

        $file_text .= "},\r\n";
        $file_text .= "success: function (data, textStatus, jqXHR) {\r\n";
        $file_text .= "var json = JSON.parse(data);\r\n";
        $file_text .= "alert(json['message']);\r\n";
        $file_text .= "if (json['status'] == '1') {\r\n";
        $file_text .= "clearAdd();\r\n";
        $file_text .= "loadData();\r\n";
        $file_text .= "}\r\n";
        $file_text .= "},\r\n";
        $file_text .= "error: function (jqXHR, textStatus, errorThrown) {\r\n";
        $file_text .= "console.log(errorThrown.toString());\r\n";
        $file_text .= "}\r\n";
        $file_text .= "});\r\n";
        $file_text .= "}\r\n";
        $file_text .= "}\r\n";


        $file_text .= "function saveEdit() {\r\n";
        $file_text .= "var r = confirm(\"ยืนยันการบันทึกข้อมูล ?\");\r\n";
        $file_text .= "if (r == true) {\r\n";
        $file_text .= "$.ajax({\r\n";
        $file_text .= "url: \"php/api/" . strtolower($tb) . ".php?=\" + Math.random(),\r\n";
        $file_text .= "type: 'GET',\r\n";
        $file_text .= "data: {\r\n";
        $file_text .= "'cm': 'change',\r\n";

        for ($i = 0; $i < count($field); $i++) {
            $file_text .= "'" . $field[$i]['name'] . "': \$('#edt-" . $field[$i]['name'] . "').val(),\r\n";
        }

        $file_text .= "},\r\n";
        $file_text .= "success: function (data, textStatus, jqXHR) {\r\n";
        $file_text .= "var json = JSON.parse(data);\r\n";
        $file_text .= "alert(json['message']);\r\n";
        $file_text .= "if (json['status'] == '1') {\r\n";
        $file_text .= "\$('#MD-CHANGE').modal('hide');\r\n";
        $file_text .= "loadData();\r\n";
        $file_text .= "}\r\n";
        $file_text .= "},\r\n";
        $file_text .= "error: function (jqXHR, textStatus, errorThrown) {\r\n";
        $file_text .= "console.log(errorThrown.toString());\r\n";
        $file_text .= "}\r\n";
        $file_text .= "});\r\n";
        $file_text .= "}\r\n";

        $file_text .= "}\r\n";

        $file_text .= "function del(" . $pri . ") {\r\n";
        $file_text .= "var r = confirm(\"ยืนยันการลบข้อมูล \");\r\n";
        $file_text .= "if (r == true) {\r\n";

        $file_text .= "\$.ajax({\r\n";
        $file_text .= "url: \"php/api/" . strtolower($tb) . ".php?=\" + Math.random(),\r\n";
        $file_text .= "type: 'GET',\r\n";
        $file_text .= "data: {\r\n";
        $file_text .= "'cm': 'del',\r\n";

        for ($i = 0; $i < count($field_pri); $i++) {
            $file_text .= "'" . $field_pri[$i]['name'] . "': " . $field_pri[$i]['name'] . ",\r\n";
        }

        $file_text .= "},\r\n";
        $file_text .= "success: function (data, textStatus, jqXHR) {\r\n";
        $file_text .= "var json = JSON.parse(data);\r\n";
        $file_text .= "alert(json['message']);\r\n";
        $file_text .= "if (json['status'] == '1') {\r\n";
        $file_text .= "loadData();\r\n";
        $file_text .= "}\r\n";
        $file_text .= "},\r\n";
        $file_text .= "error: function (jqXHR, textStatus, errorThrown) {\r\n";
        $file_text .= "console.log(errorThrown.toString());\r\n";
        $file_text .= "}\r\n";
        $file_text .= " });\r\n";

        $file_text .= "}\r\n";
        $file_text .= "}\r\n";

        //write file
        $api_file = fopen("../zjs/" . $tb . ".js", "w");
        fwrite($api_file, $file_text);
        fclose($api_file);

        //javascript file
        //html file

        $file_text = "<?php include './_sess.inc'; ?>\r\n";
        $file_text .= "<html>\r\n";
        $file_text .= "<title>\r\n";
        $file_text .= "จัดการข้อมูล " . $tb_commane . "\r\n";
        $file_text .= "</title>\r\n";
        $file_text .= "<head>\r\n";
        $file_text .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\r\n";
        $file_text .= "<?php include './_css.inc'; ?>\r\n";
        $file_text .= "</head>\r\n";

        $file_text .= "<body>\r\n";
        $file_text .= "<div id=\"wrapper\">\r\n";
        $file_text .= "<?php include './_nav.inc'; ?>\r\n";


        $file_text .= "<div id=\"page-wrapper\">\r\n";
        $file_text .= "<div class=\"row\">\r\n";
        $file_text .= "<div class=\"col-lg-12\">\r\n";
        $file_text .= "<div class=\"panel panel-primary\">\r\n";
        $file_text .= "<div class=\"panel-heading\">\r\n";
        $file_text .= "จัดการข้อมูล " . $tb_commane . "\r\n";
        $file_text .= "<div class=\"input-group input-group-sm pull-right\" style=\"width: 250px; margin-top: -5px;\">\r\n";
        $file_text .= "<input type=\"text\" class=\"form-control input-sm\" id=\"key\" placeholder=\"กรอกชื่อ\">\r\n";
        $file_text .= "<span class=\"input-group-btn\">\r\n";
        $file_text .= "<button class=\"btn btn-default btn-sm\" type=\"button\" onclick=\"loadData()\">ค้นหา</button>\r\n";
        $file_text .= "<button class=\"btn btn-default btn-sm\" type=\"button\" data-toggle=\"modal\" data-target=\"#MD-CREATE\">เพิ่ม</button>\r\n";
        $file_text .= "</span>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "<div class=\"table-responsive\">\r\n";
        $file_text .= "<table class=\"table-hover table\" id=\"tb-data\">\r\n";
        $file_text .= "<thead>\r\n";
        $file_text .= "<tr class=\"success\">\r\n";
        //field
        for ($i = 0; $i < count($field); $i++) {
            $file_text .= "<th>" . $field[$i]['TEXT'] . "</th>\r\n";
        }
        //field
        $file_text .= "<th><div align=\"right\" style=\"padding-right: 10px;\">Action</div></th>\r\n";
        $file_text .= "</tr>\r\n";
        $file_text .= "</thead>\r\n";
        $file_text .= "<tbody>\r\n";

        $file_text .= "</tbody>\r\n";
        $file_text .= "</table>\r\n";
        $file_text .= "</div>\r\n";


        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";


        $file_text .= "</div>\r\n";


        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "</body>\r\n";
        $file_text .= "</html>\r\n";



        $file_text .= "<?php include './_js.inc'; ?>\r\n";
        $file_text .= "<script src=\"zjs/" . strtolower($tb) . ".js?=<?php echo time(); ?>\"></script>\r\n";

        $file_text .= "<div class=\"modal fade\" id=\"MD-CREATE\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">\r\n";
        $file_text .= "<div class=\"modal-dialog\" role=\"document\">\r\n";
        $file_text .= "<div class=\"modal-content\">\r\n";
        $file_text .= "<div class=\"modal-header\">\r\n";
        $file_text .= "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>\r\n";
        $file_text .= "<h4 class=\"modal-title\" id=\"myModalLabel\">Create Member</h4>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "<div class=\"modal-body\">\r\n";
        $file_text .= "<div class=\"form-horizontal\">\r\n";
        $file_text .= "<fieldset>\r\n";

        for ($i = 0; $i < count($field); $i++) {
            $file_text .= "<div class=\"form-group\">\r\n";
            $file_text .= "<label class=\"col-md-3 control-label\">" . $field[$i]['TEXT'] . "</label>\r\n";
            $file_text .= "<div class=\"col-md-4\">\r\n";
            $file_text .= "<div class=\"form-inline\">\r\n";
            $file_text .= "<div class=\"form-group\" style=\"margin-left: 0px;\">\r\n";
            $file_text .= "<label class=\"sr-only\" for=\"exampleInputEmail3\">Email address</label>\r\n";
            $file_text .= "<input type=\"text\" class=\"form-control add-input-text\" id=\"add-" . $field[$i]['name'] . "\" placeholder=\"" . $field[$i]['TEXT'] . "\">\r\n";
            $file_text .= "</div>\r\n";
            $file_text .= "</div>\r\n";
            $file_text .= "</div>\r\n";
            $file_text .= "</div>\r\n";
        }


        $file_text .= "</fieldset>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "<div class=\"modal-footer\">\r\n";
        $file_text .= "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">ยกเลิก</button>\r\n";
        $file_text .= "<button type=\"button\" class=\"btn btn-primary\" onclick=\"saveAdd()\">บันทึก</button>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";

        //EDT MODAL


        $file_text .= "<div class = \"modal fade\" id = \"MD-CHANGE\" tabindex = \"-1\" role = \"dialog\" aria-labelledby = \"myModalLabel\">\r\n";
        $file_text .= "<div class = \"modal-dialog\" role = \"document\">\r\n";
        $file_text .= "<div class = \"modal-content\">\r\n";
        $file_text .= "<div class = \"modal-header\">\r\n";
        $file_text .= "<button type = \"button\" class = \"close\" data-dismiss = \"modal\" aria-label = \"Close\"><span aria-hidden = \"true\">&times;\r\n";
        $file_text .= "</span></button>\r\n";
        $file_text .= "<h4 class = \"modal-title\" id = \"myModalLabel\">แก้ไขข้อมูล Member</h4>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "<div class = \"modal-body\">\r\n";
        $file_text .= "<div class = \"form-horizontal\">\r\n";
        $file_text .= "<fieldset>\r\n";

        for ($i = 0; $i < count($field); $i++) {

            $read = "";
            if (($field[$i]['COLUMN_KEY']) == "PRI") {
                $read = "readonly";
            }
            $file_text .= "<div class = \"form-group\">\r\n";
            $file_text .= "<label class = \"col-md-3 control-label\">" . $field[$i]['TEXT'] . "</label>\r\n";
            $file_text .= "<div class = \"col-md-4\">\r\n";
            $file_text .= "<div class = \"form-inline\">\r\n";
            $file_text .= "<div class = \"form-group\" style = \"margin-left: 0px;\">\r\n";
            $file_text .= "<label class =\"sr-only\" for =\"exampleInputEmail3\">Email address</label>\r\n";
            $file_text .= "<input type =\"text\" $read class =\"form-control add-input-text\" id =\"edt-" . $field[$i]['name'] . "\" placeholder =\"" . $field[$i]['TEXT'] . "\">\r\n";
            $file_text .= "</div>\r\n";
            $file_text .= "</div>\r\n";
            $file_text .= "</div>\r\n";
            $file_text .= "</div>\r\n";
        }

        $file_text .= "</fieldset>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "<div class =\"modal-footer\">\r\n";
        $file_text .= "<button type =\"button\" class =\"btn btn-default\" data-dismiss =\"modal\">ยกเลิก</button>\r\n";
        $file_text .= "<button type =\"button\" class =\"btn btn-primary\" onclick=\"saveEdit()\">บันทึก</button>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";
        $file_text .= "</div>\r\n";


        //html file

        $html_file = fopen("../" . $tb . ".php", "w");
        fwrite($html_file, $file_text);
        fclose($html_file);
    }
}
