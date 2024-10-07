<?php

namespace App\Controllers;

use App\Models\UserModel;
use Config\Services;

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
        $validation = Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[255]',
            'surname' => 'required|min_length[3]|max_length[255]',
            'age' => 'required|integer|greater_than[0]|less_than[100]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'phone' => 'required|min_length[9]|max_length[20]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new UserModel();
        $data  = $this->request->getPost(['name', 'surname', 'age', 'email', 'phone']);
        $model->insert($data);

        return redirect()->to('/')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);

        if (empty($data['user'])) {
            return redirect()->to('/')->with('error', 'User not found');
        }

        return view('edit_user', $data);
    }

    public function update($id)
    {
        $validation = Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[255]',
            'surname' => 'required|min_length[3]|max_length[255]',
            'age' => 'required|integer|greater_than[0]|less_than[100]',
            'email' => 'required|valid_email|is_unique[users.email,id,' . $id . ']',
            'phone' => 'required|min_length[9]|max_length[20]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new UserModel();
        $data = $this->request->getPost(['name', 'surname', 'age', 'email', 'phone']);
        $model->update($id, $data);
        
        return redirect()->to('/')->with('success', 'User updated successfully');
    }

    public function delete($id)
    {
        $model = new UserModel();

        if ($model->find($id)) {
            $model->delete($id);
            return redirect()->to('/')->with('success', 'User deleted successfully');
        }

        return redirect()->to('/')->with('error', 'User not found');  
    }    

}