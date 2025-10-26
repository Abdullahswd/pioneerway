<?php
// config.php

// إعدادات التطبيق
define('BASE_URL', 'http://yourdomain.com');
define('IMAGES_PATH', '../image/');

// إعدادات القوالب
$templateConfig = [
    'business-and-freelance' => [
        'title' => 'خدمات التجارة والعمل الحر',
        'description' => 'خدمات متكاملة للتجارة الإلكترونية والعمل الحر'
    ],
    'programming' => [
        'title' => 'خدمات البرمجة والتطوير',
        'description' => 'حلول برمجية احترافية لتطوير الأعمال'
    ],
    'office' => [
        'title' => 'الخدمات المكتبية',
        'description' => 'خدمات مكتبية شاملة لتنظيم أعمالك'
    ],
    'design' => [
        'title' => 'الخدمات الإبداعية والتسويق',
        'description' => ''
    ]
];

// دوال مساعدة
function getSectionTitle($section) {
    global $templateConfig;
    return $templateConfig[$section]['title'] ?? 'خدمات الشركة';
}

function getSectionDescription($section) {
    global $templateConfig;
    return $templateConfig[$section]['description'] ?? 'خدمات متكاملة لجميع احتياجاتك';
}
