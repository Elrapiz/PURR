<?php

declare(strict_types = 1);

namespace App\Controllers\Admin;

class Home {

    public function index() {
        // check if there is a admin session login

        // otherwise
        redirect('admin/login');
    }

}