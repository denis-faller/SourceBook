<?php
declare(strict_types=1);

namespace popp\ch04\batch18;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        // runner code here

        $person= new Person(new PersonWriter());
        $person->writeName();
        $person->writeAge();
    }
}

Runner::run();