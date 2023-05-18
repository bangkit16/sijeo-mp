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
        return view('landingPage.php');
    }
    
    public function login()
    {
        return view('login.php');
    }
    public function register()
    {
        return view('register.php');
    }
    public function vendorPage()
    {
        return view('vendorPage.php');
    }
}
