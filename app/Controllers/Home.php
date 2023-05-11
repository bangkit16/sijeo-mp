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

    public function index()
    {
        $admin = $this->adminModel->findAll();
        $data = [
            'admin' => $admin,
        ];
        return view('welcome_message', $data);
    }
    public function tes()
    {
        $admin = $this->adminModel->findAll();
        $data = [
            'admin' => $admin,
        ];
        return view('tesView.php', $data);
    }
    public function login()
    {
        return view('login.php');
    }
    public function register()
    {
        return view('register.php');
    }
}
