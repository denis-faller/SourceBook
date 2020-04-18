<?php
declare(strict_types = 1);

namespace popp\ch12\batch07;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        include(__DIR__ . "/venues.php");
    }
}
Runner::run();