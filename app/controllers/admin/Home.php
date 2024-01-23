<?php

declare(strict_types = 1);

namespace App\Controllers\Admin;

use \App\Models\Admin;

class Home {

    private Admin $adminModel;

    public function __construct() {
        global $dbc;
        $this->adminModel = new Admin($dbc);
    }

    public function index() {
        
        if(isset($_SESSION['SESSADMIN'])) {
            render('../app/views/admin/home.view.php');
        } else {
            redirect('/admin/login');
        }

    }

    public function loginView() {
        render(realpath(VIEW_PATH . 'admin/login.view.php'));
    }

    public function login() {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($this->adminModel->userExist($username, $password)) {
            $_SESSION['SESSADMIN'] = md5(uniqid('SESSADMIN'));
            redirect('/admin');
        } else {
            render('../app/views/admin/login.view.php', [
                'errorMsg' => 'Invalid username or password. Try again'
            ]);
        }

    }

    public function logout() {

        session_unset();
        session_destroy();
        redirect('/admin');

    }

}