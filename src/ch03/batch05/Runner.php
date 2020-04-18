<?php
namespace popp\ch03\batch05;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run1()
    {
/* listing 03.16 */
        $settings = simplexml_load_file(__DIR__."/resolve.xml");
        $manager = new AddressManager();
        $manager->outputAddresses((string)$settings->resolvedomains);
/* /listing 03.16 */
    }
}

Runner::run1();