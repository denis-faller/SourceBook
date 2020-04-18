<?php
declare(strict_types = 1);

namespace popp\ch11\batch07;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        $main_army = new Army();
        $main_army->addUnit(new Archer());
        $main_army->addUnit(new LaserCanonUnit());

        $sub_army = new Army();
        $sub_army->addUnit(new Cavalry());
        $main_army->addUnit($sub_army);
        $main_army->addUnit(new Cavalry());

        print $main_army->textDump();
    }
}
Runner::run();