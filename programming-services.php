<?php
// programming-services.php
// هذا الملف الرئيسي لخدمات البرمجة - ضعه في المجلد الرئيسي

// تفعيل عرض الأخطاء
error_reporting(E_ALL);
ini_set('display_errors', 1);

// تحديد أننا نريد قسم البرمجة
$_GET['section'] = 'programming';
$_GET['title'] = 'خدمات البرمجة والتطوير';

// تضمين الملف الرئيسي
include 'services-system/services-page.php';
