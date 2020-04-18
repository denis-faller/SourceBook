<?php
declare(strict_types = 1);

namespace popp\ch10\batch08;

include "C:/USR/www/SourceBook/vendor/autoload.php";

require_once("C:\USR/www/SourceBook/src/ch10/batch08/legacy.php");

class Runner
{
    public static function run()
    {
/* listing 10.37 */
        $lines = getProductFileLines(__DIR__ . '/test2.txt');
        $objects = [];
        foreach ($lines as $line) {
            $id = getIDFromLine($line);
            $name = getNameFromLine($line);
            $objects[$id] = getProductObjectFromID($id, $name);
        }

        print_r($objects);
/* /listing 10.37 */
    }

    public static function run2()
    {
/* listing 10.39 */
        $facade = new ProductFacade(__DIR__ . '/test2.txt');
        $object = $facade->getProduct("234");
		print_r($object);
/* /listing 10.39 */
    }
}

Runner::run2();