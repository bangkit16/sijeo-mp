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
        return view('landingPage.php', $data);
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
        $admin = $this->adminModel->findAll();
        $data = [
            'admin' => $admin,
        ];
        
        return view('login.php', $data);
    }
    public function register()
    {
        return view('register.php');
    }
    public function vendor()
    {
        return view('vendorPage.php');
    }
}
