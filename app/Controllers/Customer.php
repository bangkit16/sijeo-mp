<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customer extends BaseController
{
    protected $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $this->customerModel->where(['username' => $username])->first();


        if ($user) {

            if ($user['password'] == $password) {
                $_SESSION['username'] = $username;
                $_SESSION['leveluser'] = $user['level_user'];
                $_SESSION['id_user'] = $user['id_user'];

                // dd($_SESSION['leveluser']);
                return redirect()->to(base_url().'/ ');
            }
        }

        return redirect()->to(base_url().'/Pages/login');
    }
    
}
