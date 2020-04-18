<?php
namespace popp\ch06\batch01;

include "C:/USR/www/SourceBook/vendor/autoload.php";

require_once("paramreader.php");

class Runner
{
    public static function run()
    {
/* listing 06.02 */
        $file = __DIR__."/params.txt";
        $params = [
            "key1" => "val1",
            "key2" => "val2",
            "key3" => "val3",
        ];
        writeParams($params, $file);
        $output = readParams($file);
        print_r($output);
/* /listing 06.02 */
    }
}
Runner::run();