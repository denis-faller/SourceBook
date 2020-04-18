<?php
declare(strict_types = 1);

namespace popp\ch09\batch08;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
/* listing 09.24 */
        $mgr = new BloggsCommsManager();
        print $mgr->getHeaderText();
        print $mgr->getApptEncoder()->encode();
        print $mgr->getFooterText();
/* /listing 09.24 */
    }
}
Runner::run();