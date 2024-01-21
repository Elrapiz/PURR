<?php

/**
 * The Front controller
 * Handles
 *      - directives
 *      - sessions
 *      - bootstrap
 *      - routing
 *
 */


/* 
 * -----------------------------------------
 * DIRECTIVE/S
 * -----------------------------------------
*/
declare(strict_types = 1);


/* 
 * -----------------------------------------
 * SESSION HANDLING
 * -----------------------------------------
*/
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain'  => 'purr.me',
    'path' => '/',
    'secure' => false,
    'httponly' => true
]);

session_start();
session_regenerate_id(true);


/* 
 * -----------------------------------------
 * BOOSTRAPING
 * -----------------------------------------
*/
require_once '../config/env.php';
require_once '../core/functions.php';
require_once '../core/autoload.php';
require_once '../config/database.php';

$router = new \Core\Router();

use \App\Controllers\Admin\Home;
use \App\Controllers\Admin\Login;


/* 
 * -----------------------------------------
 * ROUTING
 * -----------------------------------------
*/
$router
    ->get('/', function() {
        echo 'Landing route <br/>';
    })
    ->get('/admin', Home::class)
    ->get('/admin/login', Login::class)
    ->post('/admin/login', Login::class, 'login')
    ->get('/admin/logout', Home::class, 'logout')
    ->init();
