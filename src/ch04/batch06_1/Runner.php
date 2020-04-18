<?php
declare(strict_types=1);

namespace popp\ch04\batch06_1;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
/* listing 04.16 */
        $p = new ShopProduct();
        print $p->calculateTax(100) . "\n";

        $u = new UtilityService();
        print $u->calculateTax(100) . "\n";
/* /listing 04.16 */
    }
}
Runner::run();