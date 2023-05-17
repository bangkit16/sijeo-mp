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
        $email = $this->request->getVar('email');
        $password = md5($this->request->getVar('password'));
        // $user = $this->customerModel->where(['email_cutomer' => $email])->first();
        $user = $this->customerModel->where(['password_customer' => $password])->first();
        // dd($user);
        if ($user) {

            if ($user['password_customer'] == $password) {
                // dd($_SESSION['leveluser']);
                return redirect()->to(base_url() . '/ ');
            }
        }
        return redirect()->to(base_url() . '/login');
    }
    public function register(){
        
    }

}
