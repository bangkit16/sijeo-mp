<?php

namespace App\Controllers;


use App\Models\VendorModel;
use App\Models\PaketVendorModel;
use App\Models\StoreModel;
use App\Models\UserModel;
use App\Models\TransaksiModel;


class Home extends BaseController
{
    protected $vendorModel;
    protected $paketVendorModel;
    protected $storeModel;
    protected $userModel;
    protected $transaksiModel;

    public function __construct()
    {
        $this->vendorModel = new VendorModel();
        $this->paketVendorModel = new PaketVendorModel();
        $this->storeModel = new StoreModel();
        $this->userModel = new UserModel();
        $this->transaksiModel = new TransaksiModel();
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


    // public function createData()
    // {
    //     // Get the request data
    //     $requestData = $this->request->getPost();

    //     // Perform data validation
    //     // ...

    //     // Insert the data into the database
    //     $db = \Config\Database::connect();
    //     $db->table('your_table_name')->insert($requestData);

    //     // Return the API response
    //     $response = [
    //         'message' => 'Data created successfully',
    //         'data' => $requestData
    //     ];

    //     return $this->respond($response);
    // }
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
    public function simpanTransaksi()
    {
        // if (isset($_GET['submit'])) {
        $this->transaksiModel->save([
            'id_customer' => $this->request->getVar('idUser'),
            'id_paket' => $this->request->getVar('idPaket'),
            'status' => $this->request->getVar('status'),
            'total_pembayaran' => $this->request->getVar('totalP'),

            // 'no_hp' => $this->request->getVar('')
        ]);
        // }
    }
    public function profil()
    {
        if (!isset($_SESSION['username'])) {
            return redirect()->to(base_url() . 'login');
        };
        $user = $this->userModel->where(['id_user' => $_SESSION['id']])->first();
        $data = [
            'user' => $user
        ];
        return view('profil.php', $data);
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
