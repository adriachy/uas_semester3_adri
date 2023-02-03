<?php

namespace App\Controllers;
use Config\Services;
use App\Models\User_model;

class Home extends BaseController
{
    public function index()
    {
        $session       = \Config\Services::session();
        $data = [
            'session'     => $session
        ];

        if ($session->get('username') != null) {
            return redirect()->to(base_url('dashboard'));
        }

        return view('login', $data);
    }

    public function login()
    {
        $session       = \Config\Services::session();
        $m_user        = new User_model();
            $username = $this->request->getPost('username');
            $password = ($this->request->getPost('password'));
            $user     = $m_user->login($username, $password);

            // Login Proses
            if ($user) {
                $data = [
                    'username' => $username,
                    'lastlogin' => date('Y-m-d h:i:s')
                ];
                $log     = $m_user->log($data);
                $session->set('username', $username);

                return redirect()->to(base_url('dashboard'));
            }
            
            return redirect()->to(base_url('/'));
    
    }

    public function logout()
    {
        $session       = \Config\Services::session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

}