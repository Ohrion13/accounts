<?php

if (!empty($_POST)) {

    $name = strip_tags($_POST['name']);
    $amount = strip_tags($_POST['amount']);
    $date = strip_tags($_POST['date']);

    $query = $accounts->prepare("UPDATE transaction SET name = :name, amount = :amount, date_transaction = :date WHERE id_transaction = :id");

    $query->execute([
        ':name' => $name,
        ':amount' => $amount,
        ':date' => $date
    ]);

    redirectTo('http://localhost:8080/index.php');
}


if (!empty($_GET) && isset($_GET['action']) && $_GET['action'] === 'modify' && isset($_GET['id']) && is_numeric($_GET['id'])) {

    $query = $accounts->prepare("SELECT id_transaction, name, amount, date_transaction FROM transaction WHERE Id_transaction = :id;;");
    $query->execute(['id' => intval($_GET['id'])]);
    $result = $query->fetch();

    $name = strip_tags($result['name']);
    $amount = strip_tags($result['amount']);
    $date = strip_tags($result['date_transaction']);

    echo '<form action="" method="post">';
    echo '<div>';

    echo '<label for="name">Nom de l\'opération *</label>';
    echo '<input name="name" id="name" value = "' . $name . '" />';

    echo '<label class="form-label" for="amount">Montant *</label>';
    echo '<input name="amount" id="amount" value = "' . $amount . '" />';

    echo '<label for="date">Date *</label>';
    echo '<input type="date" name="date" id="date" value = "' . $date . '" />';

    echo '</div>';

    echo '<button type="submit">Confirmer modification</button>';

    echo '</form>';
}
