<?php
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->get('/danhsachsanpham', [App\Controllers\ProductController::getAllProduct()]);    # match only get requests
$router->post('/sanphamct', $handler);   # match only post requests
$router->delete($route, $handler); # match only delete requests
$router->any($route, $handler);    # match any request method

?>
