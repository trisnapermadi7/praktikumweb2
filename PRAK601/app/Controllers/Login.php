<?php
namespace App\Controllers;
use App\Models\UsersModel;
class Login extends BaseController{
    public function index(){
        return view('halaman_login');
    }

    public function process(){
        $userModel = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $userData = $userModel->where('username', $username)->first();

        if ($userData) {
            if (password_verify($password, $userData->password)) {
                session()->set([
                    'username' => $userData->username,
                    'logged_in' => true
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Username atau Password Salah');
            }
        } else {
            session()->setFlashdata('error', 'Username atau Password Salah');
        }
        return redirect()->back();
    }
    public function logout(){
        session()->destroy();
        return redirect()->to('/');
    }
}
