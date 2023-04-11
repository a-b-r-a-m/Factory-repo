<?php

declare(strict_types=1);

namespace Loginner\FakatRepo;

require_once realpath("vendor/autoload.php"); //require __DIR__ . '/vendor/autoload.php';

routes::startRouter(); //y no proc?, "undefined"

echo '<pre>';
print_r(get_defined_vars()); //$GLOBALS;
//print_r($_SERVER);
echo '</pre>';

echo __FILE__;
?>

<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <title>Routing Homepage</title>-->
<!--</head>-->
<!--<body>-->
<!--<h2>Routing Home</h2>-->
<!--<br>-->
<!--<strong>Add or visit some routes</strong>-->
<!--<br><br><br>-->
<!---->
<!--<form action="index.php" method="post">-->
<!--    <label>-->
<!--        Route path: <input type="text" name="route_path">-->
<!--    </label>-->
<!--    <br>-->
<!--    Add route:-->
<!--    <button type="submit">Add</button>-->
<!--    <br><br>-->
<!--</form>-->
<!--<form action="index.php" method="get">-->
<!--    <label>-->
<!--        Route path: <input type="text" name="route_path">-->
<!--    </label><br>-->
<!--    Go to route:-->
<!--    <button type="submit">Go to</button>-->
<!--    <br><br>-->
<!--</form>-->
<!--<br>-->
<!--</body>-->
<!--</html>-->