<?php namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $users = [
            'admin' => [
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role' => 'admin'
            ],
            'user' => [
                'password' => password_hash('user123', PASSWORD_DEFAULT),
                'role' => 'user'
            ]
        ];

        foreach ($users as $key => $user) {
            if ($username == $key && password_verify($password, $user['password'])) {
                $session->set([
                    'username' => $username,
                    'role' => $user['role'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/' . $user['role']);
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
