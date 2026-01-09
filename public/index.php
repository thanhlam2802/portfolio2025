<?php
// Gọi autoload từ Composer
require __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\HomeController;

// Khởi tạo router
$router = new Router();

// Định nghĩa route
$router->get('/', [HomeController::class, 'index']);

// Ví dụ: nếu có AboutController thì thêm:
# $router->get('/about', [AboutController::class, 'index']);

// Chạy router
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
