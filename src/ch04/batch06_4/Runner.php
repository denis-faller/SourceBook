<?php
declare(strict_types=1);

namespace popp\ch04\batch06_4;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
/* listing 04.30 */
        $u = new UtilityService();
        print $u->calculateTax(100) . "\n";
/* /listing 04.30 */
    }
}

Runner::run();