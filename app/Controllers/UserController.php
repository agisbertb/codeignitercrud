<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        #$model = new UserModel();
        #$data['users'] = $model->findAll();
        return view('home');
    }

}