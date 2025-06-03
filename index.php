<?php
// Mulai session jika dibutuhkan
session_start();

// Autoload koneksi dan controller
require_once 'config/db.php';
require_once 'controller/MaterialController.php';

$page = $_GET['page'] ?? 'home';

// Routing manual berdasarkan halaman
switch ($page) {
    case 'upload':
        include 'view/upload.php';
        break;
    case 'search':
        include 'view/search.php';
        break;
    case 'list':
        include 'view/list.php';
        break;
    case 'detail':
        include 'view/detail.php';
        break;
    case 'home':
    default:
        include 'view/home.php';
        break;
}
