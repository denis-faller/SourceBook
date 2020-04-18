<?php
declare(strict_types = 1);

namespace popp\ch09\batch06;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        $mgr = new CommsManager();
        $encoder = $mgr->getApptEncoder();
        $out = $encoder->encode();
        print "{$out}\n";
    }
}

Runner::run();