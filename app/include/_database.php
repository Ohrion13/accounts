<?php

try {
    $accounts = new PDO(
        'mysql:host=db;dbname=accounts;charset=utf8',

        'user1',
        'Evalpassword'
    );
    $accounts->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );
} catch (Exception $e) {
    die('Unable to connect to the database.
' . $e->getMessage());
}
