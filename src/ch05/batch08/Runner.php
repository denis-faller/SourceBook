<?php
declare(strict_types=1);

namespace popp\ch05\batch08;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
/* listing 05.52 */
        $test = new ModuleRunner();
        $test->init();
/* /listing 05.52 */
    }
}

Runner::run();