<?php

namespace modules\manager\Controllers;

use App\Controllers\BaseController;
use App\Models\Bonus;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function index()
    {


        echo view("../../modules/manager/Views/layout/head.php");
        echo view("../../modules/manager/Views/layout/admin_sidebar");
    }

}
