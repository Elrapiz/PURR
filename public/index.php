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
session_start();


/* 
 * -----------------------------------------
 * BOOSTRAPING
 * -----------------------------------------
*/
require_once '../core/functions.php';
require_once '../core/autoload.php';


/* 
 * -----------------------------------------
 * ROUTING
 * -----------------------------------------
*/
