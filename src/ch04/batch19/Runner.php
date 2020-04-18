<?php
declare(strict_types=1);

namespace popp\ch04\batch19;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        // runner code here

/* listing 04.80 */
        $person = new Person("bob", 44);
        $person->setId(343);
        unset($person);
/* /listing 04.80 */
    }
}

Runner::run();