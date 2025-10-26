<?php
// services-page.php
include __DIR__ . '/../header-services.php';
include 'services-functions.php';
include 'config.php';

// الحصول على بيانات القسم من الرابط أو الإعدادات
$section = $_GET['section'] ?? 'business-and-freelance';
$customTitle = $_GET['title'] ?? '';

// تحديد عنوان الصفحة
if (!empty($customTitle)) {
    $pageTitle = $customTitle;
} else {
    $pageTitle = getSectionTitle($section);
}

// جلب الخدمات والمجموعات
$services = getServices($section);
$groups = getServiceGroups($services);

// استيراد القالب
include 'services-template.php';