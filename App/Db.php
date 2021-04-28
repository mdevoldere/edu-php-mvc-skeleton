<?php 

namespace App;

use PDO;
use \Md\Db\DbContext;

use function dirname;

class Db extends DbContext
{
    static protected ?PDO $pdo = null;
    
    static public function getPdo(array $c = []): ?PDO
    {
        return parent::getPdo([
            'db_type' => 'sqlite', // or mysql
            'db_dsn' => 'sqlite:'.dirname(__DIR__).'/var/db.sqlite', // or mysql dsn
            'db_user' => 'root', // mysql 
            'db_pass' => '' // mysql 
        ]);
    }
}