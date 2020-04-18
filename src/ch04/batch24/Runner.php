<?php
declare(strict_types=1);

namespace popp\ch04\batch24;

include "C:/USR/www/SourceBook/vendor/autoload.php";

class Runner
{
    public static function run()
    {

/* listing 04.100 */
        $person = new Person();
        $person->output(
            new class implements PersonWriter {
                public function write(Person $person)
                {
                    print $person->getName(). " " . $person->getAge() . "\n";
                }
            }
        );
/* /listing 04.100 */
    }

    public static function run2()
    {

/* listing 04.101 */
        $person = new Person();
        $person->output(
            new class("persondump") implements PersonWriter {
                private $path;

                public function __construct(string $path)
                {
                    $this->path = $path;
                }

                public function write(Person $person)
                {
                    file_put_contents($this->path, $person->getName(). " " . $person->getAge() . "\n");
                }
            }
        );
/* /listing 04.101 */
    }
}
// done
Runner::run2();