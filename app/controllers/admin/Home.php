<?php

declare(strict_types = 1);

namespace App\Controllers\Admin;

class Home {

    public function index() {
        
        if(isset($_SESSION['SESSADMIN'])) {
            render('../app/views/admin/home.view.php');
        } else {
            redirect('admin/login');
        }

    }

    public function logout() {

        session_unset();
        session_destroy();
        redirect('/admin');

    }

}