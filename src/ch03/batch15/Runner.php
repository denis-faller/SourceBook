<?php
namespace popp\ch03\batch15;

include "C:/USR/www/SourceBook/vendor/autoload.php";

use popp\ch03\batch15\ShopProduct;
use popp\ch03\batch15\CdProduct;
use popp\ch03\batch15\BookProduct;
use popp\ch03\batch15\ShopProductWriter;
use popp\ch03\batch09\AddressManager;

class Runner
{

    public static function run1()
    {
/* listing 03.42 */
        $product2 =   new CdProduct(
            "Exile on Coldharbour Lane",
            "The",
            "Alabama 3",
            10.99,
            0,
            60.33
        );
        print "artist: {$product2->getProducer()}\n";
/* /listing 03.42 */
		$writter = new ShopProductWriter();
		$writter->addProduct($product2);
		$writter->write();
    }
}

Runner::run1();