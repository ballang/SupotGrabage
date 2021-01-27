<div class="card">
    <div class="card-body">

        <div id='cssmenu'>
            <ul>
                <li><a <?php echo is_active("person.php") ?> href='person.php'><span>ผู้ใช้บริการ</span></a></li>
                <li><a <?php echo is_active("watermiter-manage.php") ?> href='watermiter-manage.php'><span>จัดการมิเตอร์</span></a></li>
                <li><a <?php echo is_active("watermiter.php") ?> href='watermiter.php'><span>บันทึกมิเตอร์น้ำ</span></a></li>
                <li><a href='#'><span>ใบแจ้งหนี้</span></a></li>
                <li><a href='payment-setting.php'><span>กำหนดค่าใช้จ่าย</span></a></li>     
                <li><a href="#"><span>History</span></a></li>
                <li><a href="#"><span>Company</span></a></li>   
                <li><a href='#'>Login</a></li>  
                <li><a href="#"><?php echo basename($PHP_SELF); ?></a></li>
            </ul>
        </div>


    </div>
</div>
<?php

function is_active($link_page) {
    $base = basename($GLOBALS['PHP_SELF']);
    if ($base == $link_page) {
        return "class=\"active\"";
    } else {
        return "";
    }
}
?>