<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TransaksiModel;

class Admin extends BaseController
{
    protected $userModel;
    protected $transaksiModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->transaksiModel = new TransaksiModel();
    }
    public function dashboard()
    {

        if (!isset($_SESSION['level_user'])) {
            return redirect()->to(base_url() . 'vendorPage');
            // if (!($_SESSION['level_user'] == 2)) {

            //     return redirect()->to(base_url() . 'login');
            // };
        };
        $trans = $this->transaksiModel->findAll();
        $user = $this->userModel->findAll();
        $data = [
            'trans' => $trans,
            'user' => $user
        ];
        return view('dashboard.php', $data);
    }
}
