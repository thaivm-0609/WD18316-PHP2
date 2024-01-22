<?php
use Phroute\Phroute\RouteCollector; 

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$router = new RouteCollector();

/** Request method:
 * - get: kéo dữ liệu từ database về (lấy danh sách sp/thông tin chi tiết)
 * - post: đẩy dữ liệu lên server (thêm mới/update dữ liệu)
 * - delete: xoá bản ghi khỏi CSDL
 * - any: không chỉ định, có thể thay cho các phương thức bất kỳ
 * 
 */

/**
 * Route group:
 * Prefix group: 
 * Filter:
 */
//filter để kiểm tra user đã đăng nhập hay chưa
$router->filter('auth', function(){
    if(!isset($_SESSION['user']))
    {
        header('Location: /login');

        return false;
    }
});
/**$router->requestMethod($route, $handler) 
 * - $route: '/', '/products', '/users', '/products/{id}
 * - $handler: xử lý logic :
 *    + C1: viết function
 *    + C2: chỉ định class, function thực thi
 *  $handler = [Namespace\TênClass::class,function];
*/

$router->get('/',[App\Controllers\ProductController::class, 'getAllProduct']);    # match only get requests
$router->get('/top-10',[App\Controllers\ProductController::class, 'getTopTen']);
$router->get('/products', function() {
    echo "đây là danh sách product";
});
$router->get('/users', function() {
    echo "đây là danh sách user";
});
$router->get('/comments', function() {
    echo "đây là danh sách comment";
});

//route group để gom nhóm các route lại với nhau
// $router->group(['before' => 'auth', 'prefix'=>'/admin'], function($router) {
//     $router->get('/users',[App\Controllers\UserController::class, 'getAllUser']);
//     $router->get('/products',[App\Controllers\UserController::class, 'getAllUser']);
//     $router->get('/comments',[App\Controllers\UserController::class, 'getAllUser']);
// });

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
?>
