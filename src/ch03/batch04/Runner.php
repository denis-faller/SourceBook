<?php
namespace popp\ch03\batch04;

include "C:/USR/www/SourceBook/vendor/autoload.php";

use popp\ch03\batch04\ShopProduct;

class Runner
{
    public static function run1()
    {
/* listing 03.13 */
        $product1 = new ShopProduct(
            "My Antonia",
            "Willa",
            "Cather",
            5.99
        );
        print "author: {$product1->getProducer()}\n";
/* /listing 03.13 */
    }
}

Runner::run1();