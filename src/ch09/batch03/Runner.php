<?php
declare(strict_types = 1);

namespace popp\ch09\batch03;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {
/* listing 09.10 */
        $boss = new NastyBoss();
        $boss->addEmployee(Employee::recruit("harry"));
        $boss->addEmployee(Employee::recruit("bob"));
        $boss->addEmployee(Employee::recruit("mary"));
/* /listing 09.10 */
        $boss->projectFails();
        $boss->projectFails();
        $boss->projectFails();
    }
}
Runner::run();