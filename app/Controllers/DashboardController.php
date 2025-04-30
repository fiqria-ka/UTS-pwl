<?php namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'username' => session('username')
        ];
        return view('admin/dashboard', $data);
    }

    public function userDashboard()
    {
        $data = [
            'title' => 'Dashboard User',
            'username' => session('username')
        ];
        return view('user/dashboard', $data);
    }
}
