<?php
declare(strict_types = 1);

namespace popp\ch12\batch09;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        include(__DIR__ . "/listvenues.php");
    }
}
Runner::run();