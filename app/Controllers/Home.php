<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\VendorModel;
use App\Models\PaketVendorModel;

class Home extends BaseController
{
    protected $adminModel;
    protected $vendorModel;
    protected $paketVendorModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->vendorModel = new VendorModel();
        $this->paketVendorModel = new PaketVendorModel();
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
        $data = [
            'paket' => $this->paketVendorModel->findAll(),
            'vendor' => $this->vendorModel->findAll(),
        ];
        return view('vendorPage.php', $data);
    }
    public function detail($id)
    {
        $data = [
            'paketDetail' => $this->paketVendorModel->where(['id' => $id])->first(),
            'paket' => $this->paketVendorModel->findAll(),
        ];
        return view('detail.php', $data);
    }
}
