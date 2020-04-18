<?php
declare(strict_types = 1);

namespace popp\ch09\batch13;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        $commsMgr = AppConfig::getInstance()->getCommsManager();
        print $commsMgr->getApptEncoder()->encode();
    }
}

Runner::run();