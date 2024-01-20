<?php

declare(strict_types = 1);

namespace App\Models;

class Admin {

    public function __construct(
        private \PDO $dbc
    ) {}

    public function userExist(string $username, string $password): bool {

        $query = '
            SELECT * FROM admin
            WHERE username = ?
            AND password = ?;
        ';

        $stmt = $this->dbc->prepare($query);
        $stmt->execute([
            $username,
            $password
        ]);

        return $stmt->rowCount() === 1? true : false;

    }

}