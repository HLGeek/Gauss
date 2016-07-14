<?php
require 'Core/Autoloader.php';
Core\Autoloader::register();
$db = new \Core\Database();

$page = isset($_GET['p']) ? $_GET['p'] : 'Home';
if (file_exists("Pages/$page.php"))
{
    require "Pages/$page.php";
}
else {
    require "Pages/404.php";
}