<?php
declare(strict_types = 1);

namespace popp\ch12\batch01;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        // runner code here
        $helper = new ApplicationHelper();
        $helper->getOptions();
    }
}
Runner::run();