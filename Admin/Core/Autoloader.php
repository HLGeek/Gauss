<?php


namespace Core;


class Autoloader extends \PDO
{
    static function autoload($file)
    {
        require "$file.php";
    }
    static function register()
    {
        spl_autoload_register(array(__CLASS__,'autoload'));
    }
}