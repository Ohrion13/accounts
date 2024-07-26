<?php

session_start();

include 'include/_database.php';
include 'include/_config.php';
include 'include/_function.php';

preventCSRF();

stripTagsArray($_POST);


$errorsList = [];

if (!isset($_POST['name']) || strlen($_POST['name']) === 0) {
    $errorsList[] = 'insert_name_ko';
}

if (strlen($_POST['name']) >= 50) {
    $errorsList[] = 'insert_name_size';
}

if (!isset($_POST['amount']) || is_numeric($_POST['amount'])) {
    $errorsList[] = 'insert_amount';
}

if (!isset($_POST['date']) || empty($_POST['date'])) {
    $errorsList[] = 'insert_date';
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = ($_POST['name']);
    $amount = ($_POST['amount']);
    $date = ($_POST['date']);

    $insert = $accounts->prepare("INSERT INTO transaction (name, amount, date_transaction) VALUES (:name, :amount, :date)");

    $insert->execute([
        ':name' => strip_tags($name),
        ':amount' => strip_tags(intval($amount)),
        ':date' => strip_tags($date)
    ]);

    addMessage('insert_ok');
}


redirectTo('add.php');
