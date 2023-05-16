<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Home extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function login()
    {
        $admin = $this->adminModel->findAll();
        $data = [
            'admin' => $admin,
        ];
        return view('welcome_message', $data);
    }
    
}
