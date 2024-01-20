<?php

declare(strict_types = 1);

function render(string $viewPath, mixed $data = null) {
    if(file_exists($viewPath)) {
        require_once $viewPath;
    } else {
        die("View path: {$viewPath} does not exist");
    }
}

function redirect(string $url) {
    header("Location:/{$url}");
}

function dd(mixed $data, bool $die = true): void {
    echo '<br/><pre>';
    print_r($data);
    echo '</pre>';

    if ($die)
        die('Done');
}