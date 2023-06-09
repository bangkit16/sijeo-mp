<?php

namespace App\Controllers;

use App\Models\UserModel;

class Customer extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login()
    {
        $email = $this->request->getVar('email');
        $password = md5($this->request->getVar('password'));
        // $user = $this->userModel->where(['email_cutomer' => $email])->first();
        $user = $this->userModel->where(['password_' => $password])->first();
        // dd($user);
        if ($user) {

            if ($user['password'] == $password) {
                $_SESSION['username'] = $user['nama'];
                $_SESSION['level_user'] = $user['level_user'];
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
        $this->userModel->save([
            'nama' => $this->request->getVar('nama'),
            'password' => md5($this->request->getVar('password')),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('nohp'),
            'alamat' => $this->request->getVar('alamat'),
            'level_user' => 1
            // 'no_hp' => $this->request->getVar('')
        ]);
        return redirect()->to(base_url());
    }
}
