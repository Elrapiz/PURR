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
    'lifetime' => 1800, // 30 mins
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
use \App\Controllers\Landing;


/* 
 * -----------------------------------------
 * ROUTING
 * -----------------------------------------
*/
$router
    ->get('/', Landing::class)
    ->get('/admin', Home::class)
    ->get('/admin/login', Home::class, 'loginView')
    ->get('/admin/logout', Home::class, 'logout')
    ->get('/admin/university', Home::class)
    ->get('/admin/rr', Home::class)
    ->get('/admin/public-type', Home::class)
    ->get('/admin/users', Home::class)
    ->get('/admin/user-accounts', Home::class)
    ->post('/admin/login', Home::class, 'login')
    ->init();
