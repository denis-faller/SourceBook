<?php
declare(strict_types=1);

namespace popp\ch04\batch06_9;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
/* listing 04.44 */

// yet another deliberate error!
        $u = new UtilityService(100);
        print $u->getFinalPrice() . "\n";
        print $u->calculateTax() . "\n";

/* /listing 04.44 */
    }
}
Runner::run();