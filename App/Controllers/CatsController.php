<?php 

namespace App\Controllers;

use App\Models\CatsRepository;
use Md\Controllers\Controller;

class CatsController extends Controller
{
    public function init()
    {
        // load components
        $this->repo = new CatsRepository();
        //echo ('<pre>'.var_export($this, true));
    }

    /**
     * /cats
     */
    public function indexAction(): void
    {
        $result = $this->repo->getAll();

        $this->response->setData($result);
    }

    /**
     * /cats/details/{id}
     */
    public function detailsAction(): void
    {
        $this->view = true; // get "/App/Views/Cats/details.php" & html output

        $id = intval($this->request->getId() ?? 0);

        $result = $this->repo->getById($id);

        $this->response->addData('cat', $result);
    }
}