<?php
declare(strict_types = 1);

namespace popp\ch09\batch10;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        $mgr = new BloggsCommsManager();
        print $mgr->getHeaderText();
        print $mgr->make(CommsManager::APPT)->encode();
        print $mgr->getFooterText();
    }
}

Runner::run();