<?php

namespace Loginner\FakatRepo; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Routing Homepage</title>
</head>
<body>
<h2>Routing Home</h2>
<br>
<strong>Add or visit some routes</strong>
<br><br><br>

<form action="index.php" method="post">
    Route path: <input type="text" name="route_path">
    <br>
    Add route:
    <button type="submit">Add</button>
    <br><br>
</form>
<form action="index.php" method="get">
    Route path: <input type="text" name="route_path"><br>
    Go to route:
    <button type="submit">Go to</button>
    <br><br>
</form>

<?php

require_once realpath("vendor/autoload.php"); //require __DIR__ . '/vendor/autoload.php';

$router = new Router();

//$router->addRoute('/', function () {
//    echo 'Home route added - anon callback';
//});
//$router->addRoute('/about', function () {
//    echo 'About route added - anon callback';
//});
//$router->addRoute('/contact', function () {
//    echo 'Contact route added - anon callback';
//});

$router
    ->addRoute('/', [\Loginner\FakatRepo\Home::class, 'index'])
    ->addRoute('/products', [\Loginner\FakatRepo\Product::class, 'index'])
    ->addRoute('/products/create', [\Loginner\FakatRepo\Product::class, 'create']);

$uri = $_SERVER['REQUEST_URI'];
echo $uri . PHP_EOL;
echo $router->resolveRoute($uri) . PHP_EOL;

//                $virtualDay = new DateTime('6.2.2023.');
//                $deadline = new DateInterval('P90D');
//                var_dump($virtualDay->format('d/m/y'));
//                var_dump($deadline->d);
//                var_dump($virtualDay->add($deadline)->format('d/m/y'));

echo '<pre>';
print_r(get_defined_vars()); //$GLOBALS;
//print_r($_SERVER);
echo '</pre>';

echo __FILE__;
?>
<br>
</body>
</html>
