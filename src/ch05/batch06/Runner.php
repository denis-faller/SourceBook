<?php
declare(strict_types=1);

namespace popp\ch05\batch06;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        $d = new Delegator();
        $d->thing();
    }
}

Runner::run();