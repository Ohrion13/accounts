<?php

include 'include/_config.php';
include 'include/_function.php';

if (!empty($_GET) && isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id']) && is_numeric($_GET['id'])) {

    $query = $accounts->prepare("DELETE FROM transaction WHERE id_transaction = :id;");

    $query->execute(['id' => intval($_GET['id'])]);

    addMessage('delete_ok');
}
