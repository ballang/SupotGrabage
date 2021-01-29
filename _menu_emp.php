<div class="card">
    <div class="card-body">

        <div id='cssmenu'>
            <ul>
                <li><a <?php echo is_active("person.php") ?> href='person.php'><span>ผู้ใช้บริการ</span></a></li>
                <li><a <?php echo is_active("miter-zone.php") ?> href='miter-zone.php'><span>โซนการใช้น้ำ</span></a></li>
                <li><a <?php echo is_active("watermiter-manage.php") ?> href='watermiter-manage.php'><span>จัดการมิเตอร์</span></a></li>
                <li><a <?php echo is_active("watermiter.php") ?> href='watermiter.php'><span>จดมิเตอร์น้ำ</span></a></li>
                <li><a <?php echo is_active("open-invoice.php") ?> href='open-invoice.php'><span>ใบแจ้งหนี้</span></a></li>
                <li><a <?php echo is_active("payment-setting.php") ?> href='payment-setting.php'><span>ตั้งค่าใช้จ่าย</span></a></li>     
                <li><a <?php echo is_active("payment.php") ?>  href="payment.php"><span>ชำระเงิน</span></a></li>
                <li><a href="#"><span>Company</span></a></li>   
                <li><a href='#'>Login</a></li>  
                <li><a href="#"><?php echo basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?></a></li>
            </ul>
        </div>


    </div>
</div>
<?php

function is_active($link_page) {
    $base = basename($_SERVER["SCRIPT_FILENAME"]);
    if ($base == $link_page) {
        return "class=\"active\"";
    } else {
        return "";
    }
}
?>