<?php 

namespace App\Controllers;

use Md\Controllers\Controller;

class HomeController extends Controller
{
    public function init()
    {
        // load components
    }

    /**
     * /home
     */
    public function indexAction(): void
    {
        $this->response->addData('message', 'Hello World');
    }

    /**
     * /home/example
     */
    public function exampleAction(): void
    {
        $this->response->addData('message', 'you fired the example action');
    }
}