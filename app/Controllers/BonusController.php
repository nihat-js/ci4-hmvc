<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bonus;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class BonusController extends BaseController
{
    public function index()
    {

        $userModel = new UserModel();
        $user = $userModel->findAll();
        $users  = $userModel->select("*")->findAll();
        return view("bonus",["users" => $users]);
    }

}
