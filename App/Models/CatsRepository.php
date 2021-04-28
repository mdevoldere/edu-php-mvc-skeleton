<?php 

namespace App\Models;

use App\Db;
use Md\Db\Repository;

class CatsRepository extends Repository
{
    public function __construct()
    {
        Db::getPdo();
        parent::__construct('cats', 'id', '\\App\\Db');
    }
}