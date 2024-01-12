<?php

declare(strict_types = 1);

function dd(mixed $data, bool $die = true): void {
    echo '<br/><pre>';
    print_r($data);
    echo '</pre>';

    if ($die)
        die('Done');
}