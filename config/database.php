<?php

try {
    $dbc = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . '',
        DB_USER,
        DB_PASSWORD,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);

} catch (PDOException $e) {
    die($e->getMessage() . '<br/>' . $e->getCode());
}
