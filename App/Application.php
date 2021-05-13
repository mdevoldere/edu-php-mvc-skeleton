<?php 

namespace App;

use Md\App;
use Md\Controllers\IController;
use \Md\Db\DbContext;
use Md\Http\IRouter;

use function dirname;

class Application extends App
{    
    static protected function handleController(IRouter $_router): ?IController 
    {
        DbContext::setContext([
            'db_type' => 'sqlite', // or mysql
            'db_dsn' => 'sqlite:'.dirname(__DIR__).'/var/db.sqlite', // or mysql dsn
            'db_user' => 'root', // mysql 
            'db_pass' => '' // mysql 
        ], 'myCats');

        return parent::handleController($_router);
    }
}
