<?php

declare(strict_types = 1);

namespace App\Controllers\Admin;

use \App\Models\Admin;

class Login {

    private Admin $adminModel;

    public function __construct() {
        global $dbc;
        $this->adminModel = new Admin($dbc);
    }

    public function index() {
        // log in render
        render('../app/views/admin/login.view.php');
    }

    public function login() {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($this->adminModel->userExist($username, $password)) {
            echo 'User exist';
        } else {
            render('../app/views/admin/login.view.php', [
                'errorMsg' => 'Invalid username or password. Try again'
            ]);
        }

    }

}