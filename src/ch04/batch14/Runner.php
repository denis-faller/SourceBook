<?php
declare(strict_types=1);

namespace popp\ch04\batch14;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
        // runner code here
        $checkout = new Checkout();
        $checkout = new IllegalCheckout();
    }
}

Runner::run();