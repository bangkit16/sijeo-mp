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
                $_SESSION['username'] = $user['nama_customer'];
                return redirect()->to(base_url() . ' ');
            }
        }
        return redirect()->to(base_url() . 'login');
    }
    public function logout()
    {
        // unset($_SESSION['username']);
        // unset($_SESSION['leveluser']);

        session()->remove('username');

        return redirect()->to(base_url());
    }
    public function register()
    {
        $this->customerModel->save([
            'nama_customer' => $this->request->getVar('nama'),
            'password_customer' => md5($this->request->getVar('password')),
            'email_customer' => $this->request->getVar('email'),
            'no_hp_customer' => $this->request->getVar('nohp'),
            'alamat_customer' => $this->request->getVar('alamat'),
            // 'no_hp' => $this->request->getVar('')
        ]);
        return redirect()->to(base_url());
    }
}
