<?php

namespace App\Controllers;


use App\Models\VendorModel;
use App\Models\PaketVendorModel;
use App\Models\StoreModel;

class Home extends BaseController
{
    protected $vendorModel;
    protected $paketVendorModel;
    protected $storeModel;

    public function __construct()
    {
        $this->vendorModel = new VendorModel();
        $this->paketVendorModel = new PaketVendorModel();
        $this->storeModel = new StoreModel();
    }

    public function index()
    {
        $data = [
            'paket' => $this->paketVendorModel->findAll(5),
        ];
        return view('landingPage.php', $data);
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
        if (!isset($_SESSION['username'])) {
            return redirect()->to(base_url() . 'login');
        };
        $paketDetail = $this->paketVendorModel->where(['id' => $id])->first();
        $vendor = $this->vendorModel->where(['id_vendor' => $paketDetail['id_vendor']])->first();
        $store = $this->storeModel->where(['id_vendor' => $paketDetail['id_vendor']])->findAll();

        $data = [
            'paketDetail' => $paketDetail,
            'vendor' => $vendor,
            'store' => $store,
            'paket' => $this->paketVendorModel->findAll(),
        ];
        return view('detail.php', $data);
    }
    public function profil()
    {
        return view('profil.php');
    }
    public function daftarVendor()
    {
        return view('daftarVendor.php');
    }
    public function notifikasi()
    {
        return view('notifikasi.php');
    }
    public function profilVendor($id)
    {
        $data = [
            'paket' => $this->paketVendorModel->where(['id_vendor' => $id])->findAll(),
            'vendor' => $this->vendorModel->where(['id_vendor' => $id])->first(),
        ];
        return view('profilVendor.php', $data);
    }
}
