<?php

declare(strict_types = 1);

namespace App\Controllers\Admin;

class Login {

    public function index() {
        // log in render
        render('../app/views/admin/login.view.php');
    }

    public function login() {
        // logging in process
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo 'POST process';
        }

    }

}