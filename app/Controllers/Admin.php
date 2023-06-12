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
        return view('dashboard.php');
    }
}
