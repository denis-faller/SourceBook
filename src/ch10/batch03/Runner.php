<?php

namespace popp\ch10\batch03;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {

        $tank =  new Tank();
        $tank2 = new Tank();
        $soldier = new Soldier();

        $army = new Army();
        $army->addUnit($soldier);
        $army->addUnit($tank);
        $army->addUnit($tank2);

        print_r($army);

        $army->removeUnit($tank2);

        print_r($army);
    }
}
Runner::run();