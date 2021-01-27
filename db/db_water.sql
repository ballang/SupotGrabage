-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 27, 2021 at 01:05 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_water`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `customer_type`
-- 

CREATE TABLE `customer_type` (
  `ctype_code` varchar(2) NOT NULL COMMENT 'รหัสประเภทลูกค้า',
  `ctype_desc` varchar(50) NOT NULL COMMENT 'ชื่อประเภทลูกค้า',
  `ctype_create_on` datetime NOT NULL COMMENT 'สร้างเมื่อ',
  `ctype_update_on` datetime NOT NULL COMMENT 'อัพเดทเมื่อ',
  `ctype_create_by` varchar(32) NOT NULL COMMENT 'สร้างโดย',
  `ctype_update_by` varchar(32) NOT NULL COMMENT 'อัพเดทโดย',
  `ctype_ste` varchar(1) NOT NULL COMMENT 'สถานะ',
  PRIMARY KEY  (`ctype_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='ประเภทลูกค้า';

-- 
-- Dumping data for table `customer_type`
-- 

INSERT INTO `customer_type` VALUES ('01', 'บุคคลธรรมดา', '2021-01-25 08:52:17', '2021-01-25 08:52:20', 'DEV', 'DEV', '1');
INSERT INTO `customer_type` VALUES ('02', 'นิติบุคคล', '2021-01-25 08:53:11', '2021-01-25 08:53:14', 'DEV', 'DEV', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `miter_unit`
-- 

CREATE TABLE `miter_unit` (
  `munit_number` varchar(10) NOT NULL COMMENT 'เลขที่จด',
  `munit_month` varchar(2) NOT NULL COMMENT 'เดือน',
  `munit_year` varchar(4) NOT NULL COMMENT 'ปี',
  `mt_id` varchar(7) NOT NULL COMMENT 'รหัสมิเตอร์',
  `befor_unit` varchar(10) NOT NULL COMMENT 'เลขก่อนจด',
  `after_unit` varchar(10) NOT NULL COMMENT 'เลขหลังจด',
  `use_unit` int(11) NOT NULL COMMENT 'จำนวนหน่วยที่ใช้',
  `is_garbage` varchar(1) NOT NULL COMMENT 'ใช้บริการขยะ',
  `munit_create_by` varchar(32) NOT NULL COMMENT 'ผู้สร้างรายการ',
  `munit_create_on` datetime NOT NULL COMMENT 'วันที่สร้างรายการ',
  `munit_update_by` varchar(32) NOT NULL COMMENT 'ผู้ปรับปรุง',
  `munit_update_on` datetime NOT NULL COMMENT 'วันที่ปรับปรุง',
  `write_lat` varchar(10) NOT NULL COMMENT 'ละติจูด',
  `write_lng` varchar(10) NOT NULL COMMENT 'ลองติจูด',
  `munit_ext1` varchar(50) NOT NULL COMMENT 'สำรอง 1',
  `munit_ext2` varchar(50) NOT NULL COMMENT 'สำรอง 2',
  `munit_ext3` varchar(50) NOT NULL COMMENT 'สำรอง 3',
  `munit_ext4` varchar(50) NOT NULL COMMENT 'สำรอง 4',
  `munit_ext5` varchar(50) NOT NULL COMMENT 'สำรอง 5',
  `munit_extn1` double NOT NULL COMMENT 'สำรองตัวเลข 1',
  `munit_extn2` double NOT NULL COMMENT 'สำรองตัวเลข 2',
  `munit_extn3` double NOT NULL COMMENT 'สำรองตัวเลข 3',
  `munit_extn4` double NOT NULL COMMENT 'สำรองตัวเลข 4',
  `munit_extn5` double NOT NULL COMMENT 'สำรองตัวเลข 5',
  `munit_ste` varchar(1) NOT NULL COMMENT 'สถานะ',
  PRIMARY KEY  (`munit_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='จดมิเตอร์น้ำ';

-- 
-- Dumping data for table `miter_unit`
-- 

INSERT INTO `miter_unit` VALUES ('W640000001', '01', '2564', '0000005', '00000', '0012', 12, '0', 'DEV', '2021-01-26 20:07:49', 'DEV', '2021-01-26 20:07:49', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `miter_water`
-- 

CREATE TABLE `miter_water` (
  `mt_id` varchar(7) NOT NULL COMMENT 'miter id',
  `ps_code` varchar(7) NOT NULL COMMENT 'เจ้าของ',
  `z_code` varchar(2) NOT NULL COMMENT 'โซน',
  `mt_desc` varchar(30) NOT NULL COMMENT 'ชื่อมิเตอร์',
  `crr_unit` varchar(10) NOT NULL COMMENT 'ยูนิต',
  `reg_date` datetime NOT NULL COMMENT 'วันที่ลงทะเบียน',
  `reg_by` varchar(32) NOT NULL COMMENT 'ผู้บันทึกการลงทะเบียน',
  `update_on` datetime NOT NULL COMMENT 'ปรับปรุงล่าสุด',
  `update_by` varchar(32) NOT NULL COMMENT 'ผู้บันทึกการปรับปรุง',
  `lat` varchar(10) NOT NULL COMMENT 'ละติจูด',
  `lng` varchar(10) NOT NULL COMMENT 'ลองติจูด',
  `house_id` varchar(10) NOT NULL COMMENT 'บ้านเลขที่',
  `addr_desc` varchar(100) NOT NULL COMMENT 'ที่อยู่',
  `is_garbage` varchar(1) NOT NULL COMMENT 'ค่าขยะ',
  `mt_ste` varchar(1) NOT NULL COMMENT 'สถานะ',
  `mt_ext1` varchar(50) NOT NULL COMMENT 'สำรอง 1',
  `mt_ext2` varchar(50) NOT NULL COMMENT 'สำรอง 2',
  `mt_ext3` varchar(50) NOT NULL COMMENT 'สำรอง 3',
  `mt_ext4` varchar(50) NOT NULL COMMENT 'สำรอง 4',
  `mt_ext5` varchar(50) NOT NULL COMMENT 'สำรอง 5',
  `mt_extn1` double NOT NULL COMMENT 'สำรองตัวเลข 1',
  `mt_extn2` double NOT NULL COMMENT 'สำรองตัวเลข 2',
  `mt_extn3` double NOT NULL COMMENT 'สำรองตัวเลข 3',
  `mt_extn4` double NOT NULL COMMENT 'สำรองตัวเลข 4',
  `mt_extn5` double NOT NULL COMMENT 'สำรองตัวเลข 5',
  PRIMARY KEY  (`mt_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='มิเตอร์น้ำ';

-- 
-- Dumping data for table `miter_water`
-- 

INSERT INTO `miter_water` VALUES ('0000001', '0000001', '0', 'test', '00000', '2021-01-25 18:35:52', 'DEV', '2021-01-25 18:35:52', 'DEV', '22', '33', '232', '2323', '0', '1', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `miter_water` VALUES ('0000002', '0000001', '0', '3w5', '232', '2021-01-25 18:47:29', 'DEV', '2021-01-25 18:47:29', 'DEV', '34324', '234', '234', '234234', '0', '1', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `miter_water` VALUES ('0000003', '0000001', '0', 'etrt', '34', '2021-01-25 18:50:34', 'DEV', '2021-01-25 18:50:34', 'DEV', '213', '123', '231', '123123', '1', '1', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `miter_water` VALUES ('0000004', '0000001', '01', 'Test', '9938', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '13999', '1233334', '123', 'Test', '1', '2', '', '', '', '', '', 0, 0, 0, 0, 0);
INSERT INTO `miter_water` VALUES ('0000005', '0000001', '02', 'Test', '00000', '2021-01-26 14:54:05', 'DEV', '2021-01-26 14:54:05', 'DEV', '00099', '13123', '123', 'test', '0', '1', '', '', '', '', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `miter_zone`
-- 

CREATE TABLE `miter_zone` (
  `z_code` varchar(2) NOT NULL COMMENT 'รหัสโซน',
  `z_desc` varchar(50) NOT NULL COMMENT 'ชื่อโซน',
  `z_create_on` datetime NOT NULL COMMENT 'สร้างเมื่อ',
  `z_create_by` varchar(32) NOT NULL COMMENT 'สร้างโดย',
  `z_update_on` datetime NOT NULL COMMENT 'อัพเดทเมื่อ',
  `z_update_by` varchar(32) NOT NULL COMMENT 'อัพเดทโดย',
  `z_ext1` varchar(50) NOT NULL COMMENT 'สำรอง 1',
  `z_ext2` varchar(50) NOT NULL COMMENT 'สำรอง 2',
  `z_ext3` varchar(50) NOT NULL COMMENT 'สำรอง 3',
  `z_ext4` varchar(50) NOT NULL COMMENT 'สำรอง 4',
  `z_ext5` varchar(50) NOT NULL COMMENT 'สำรอง 5',
  `z_extn1` double NOT NULL COMMENT 'สำรองตัวเลข 1',
  `z_extn2` double NOT NULL COMMENT 'สำรองตัวเลข 2',
  `z_extn3` double NOT NULL COMMENT 'สำรองตัวเลข 3',
  `z_extn4` double NOT NULL COMMENT 'สำรองตัวเลข 4',
  `z_extn5` double NOT NULL COMMENT 'สำรองตัวเลข 5',
  `z_ste` varchar(1) NOT NULL COMMENT 'สถานะ',
  PRIMARY KEY  (`z_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='โซนมิเตอร์';

-- 
-- Dumping data for table `miter_zone`
-- 

INSERT INTO `miter_zone` VALUES ('01', 'แก้วสุวรรณ', '2021-01-25 13:19:26', 'DEV', '2021-01-25 13:19:32', 'DEV', '', '', '', '', '', 0, 0, 0, 0, 0, '1');
INSERT INTO `miter_zone` VALUES ('02', 'มหาชัย', '2021-01-26 14:27:57', 'DEV', '2021-01-26 14:28:01', 'DEV', '', '', '', '', '', 0, 0, 0, 0, 0, '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `person`
-- 

CREATE TABLE `person` (
  `ps_code` varchar(7) NOT NULL COMMENT 'รหัสลูกค้า',
  `ps_name` varchar(100) NOT NULL COMMENT 'ชื่อลูกค้า',
  `ctype_code` varchar(2) NOT NULL COMMENT 'ประเภท',
  `ps_addr1` varchar(100) NOT NULL COMMENT 'ที่อยู่ 1',
  `ps_addr2` varchar(100) NOT NULL COMMENT 'ที่อยู่ 2',
  `ps_phone` varchar(20) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `ps_line` varchar(50) NOT NULL COMMENT 'Line ID',
  `ps_tax` varchar(20) NOT NULL COMMENT 'เลขภาษี',
  `ps_create_on` datetime NOT NULL COMMENT 'วันที่เพิ่ม',
  `ps_update_on` datetime NOT NULL COMMENT 'วันที่ปรับปรุง',
  `ps_create_by` varchar(32) NOT NULL COMMENT 'ผู้เพิ่ม',
  `ps_update_by` varchar(32) NOT NULL COMMENT 'ผู้ปรับปรุง',
  `ps_img` longtext NOT NULL COMMENT 'รูปลูกค้า',
  `ps_ext1` varchar(100) NOT NULL COMMENT 'สำรอง 1',
  `ps_ext2` varchar(100) NOT NULL COMMENT 'สำรอง 2',
  `ps_ext3` varchar(100) NOT NULL COMMENT 'สำรอง 3',
  `ps_ext4` varchar(100) NOT NULL COMMENT 'สำรอง 4',
  `ps_ext5` varchar(100) NOT NULL COMMENT 'สำรอง 5',
  `ps_extn1` double NOT NULL COMMENT 'สำรองตัวเลข 1',
  `ps_extn2` double NOT NULL COMMENT 'สำรองตัวเลข 2',
  `ps_extn3` double NOT NULL COMMENT 'สำรองตัวเลข 3',
  `ps_extn4` double NOT NULL COMMENT 'สำรองตัวเลข 4',
  `ps_extn5` double NOT NULL COMMENT 'สำรองตัวเลข 5',
  `ps_ste` varchar(1) NOT NULL COMMENT 'สถานะ',
  PRIMARY KEY  (`ps_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='ลูกค้า';

-- 
-- Dumping data for table `person`
-- 

INSERT INTO `person` VALUES ('0000001', 'บัลลังก์ สำเภาพงษ์', '02', '12 ม.9 ต.ในเมือง', 'อ.เมือง จ.กำแพงเพชร 62000', '098990009', '@ballang', '234234234', '0000-00-00 00:00:00', '2021-01-25 13:03:35', '', 'DEV', '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', '', '', '', '', '', 0, 0, 0, 0, 0, '');
