<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        
        return view('home', $data);
    }

    public function create()
    {
        return view('create_user');
    }

    public function store()
    {
        $model = new UserModel();
        $data  = $this->request->getPost(['name', 'surname', 'age', 'email', 'phone']);
        $model->insert($data);

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);

        return view('edit_user', $data);
    }

    public function update($id)
    {
        $model = new UserModel();
        $data = $this->request->getPost(['name', 'surname', 'age', 'email', 'phone']);
        $model->update($id, $data);
        
        return redirect()->to('/users');
    }
}
