<?php
declare(strict_types=1);

namespace popp\ch04\batch04;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        // runner code here
        $writer = new ErroredWriter();
    }
}
Runner::run();