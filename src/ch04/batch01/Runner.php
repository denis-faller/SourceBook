<?php
declare(strict_types=1);

namespace popp\ch04\batch01;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        // runner code here
        print StaticExample::$aNum;
        StaticExample::sayHello();
    }

    public static function run2()
    {
        StaticExample2::sayHello();
        StaticExample2::sayHello();
        StaticExample2::sayHello();
    }
}

Runner::run2();