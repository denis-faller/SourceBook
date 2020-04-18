<?php
declare(strict_types = 1);

namespace popp\ch10\batch05;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        $army1 = new Army();
        $army1->addUnit(new Archer());
        $army1->addUnit(new Archer());

        $army2 = new Army();
        $army2->addUnit(new Archer());
        $army2->addUnit(new Archer());
        $army2->addUnit(new LaserCannonUnit());

        $composite = UnitScript::joinExisting($army2, $army1);
		echo '<pre>';
        print_r($composite);
		echo '</pre>';
    }
}
Runner::run();