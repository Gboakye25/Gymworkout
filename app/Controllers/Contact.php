<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact');
    }

    public function submit()
    {
        $contactModel = new ContactModel();

        $contactModel->save([
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'message' => $this->request->getPost('message')
        ]);

        return redirect()->to(base_url('contact'));
    }
}