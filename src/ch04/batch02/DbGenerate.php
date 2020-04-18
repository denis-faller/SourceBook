<?php
declare(strict_types=1);

namespace popp\ch04\batch02;

use PDO;

class DbGenerate
{
    public function getPDO()
    {

        $pdo = new PDO('mysql:host=localhost;dbname=booking', 'root', '12061991', array(PDO::ATTR_PERSISTENT => true));
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		
        return $pdo;
    }
}
