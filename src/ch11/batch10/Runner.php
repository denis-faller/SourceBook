<?php
declare(strict_types = 1);

namespace popp\ch11\batch10;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
/* listing 11.56 */
        $acquirer = new UnitAcquisition();
        $tileforces = new TileForces(4, 2, $acquirer);
        $power = $tileforces->firepower();

        print "power is {$power}\n";
/* /listing 11.56 */
    }
}
Runner::run();