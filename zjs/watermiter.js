/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function AfterData() {
    swal({
        title: "ยืนยันการดึงข้อมูล ?",
        text: "ยกยอดข้อมูลการจดมิเตอร์น้ำ",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "ยกยอดข้อมูล",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

           MESSAGE_SUCCESS("ยกยอดข้อมูลสำเร็จ");

        }, TIME_OUT)
    });
}
function PostData() {
    swal({
        title: "ยืนยันการบันทึกข้อมูล ?",
        text: "บันทึกข้อมูลการจดมิเตอร์น้ำ",
        icon: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonText: "บันทึกข้อมูล",
        cancelButtonText: "ยกเลิก",
    }, function () {
        setTimeout(function () {

           MESSAGE_SUCCESS("ยกยอดข้อมูลสำเร็จ");

        }, TIME_OUT)
    });
}
