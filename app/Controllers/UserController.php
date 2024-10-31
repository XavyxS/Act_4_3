<?php

namespace App\Controllers;
use App\Models\TestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class UserController extends BaseController
{
    public function index()
    {
        $model = new TestModel();
        $data['users'] = $model->findAll();

        return view('user_list', $data);
    }

    public function create()
    {
        return view('user_form');
    }

    public function store()
    {
        $model = new TestModel();
        $model->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $model = new TestModel();
        $data['user'] = $model->find($id);

        if (!$data['user']) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('user_form', $data);
    }

    public function update($id)
    {
        $model = new TestModel();
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ]);

        return redirect()->to('/users');
    }

    public function delete($id)
    {
        $model = new TestModel();
        $model->delete($id);

        return redirect()->to('/users');
    }
}
