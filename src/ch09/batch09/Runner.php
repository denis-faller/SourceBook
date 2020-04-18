<?php
declare(strict_types = 1);

namespace popp\ch09\batch09;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        $mgr = new MegaCommsManager();
        print $mgr->getHeaderText();
        print $mgr->getApptEncoder()->encode();
        print $mgr->getFooterText();
    }
}
Runner::run();