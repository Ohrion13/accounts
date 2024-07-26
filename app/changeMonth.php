<?php
include 'include/_header.php';
include 'include/_database.php';
include 'include/_delete.php';

$query = $accounts->prepare("SELECT sum(amount) FROM `transaction`;");
$query->execute();
$result = $query->fetch();

echo '<div class="container">';
echo '<section class="card mb-4 rounded-3 shadow-sm">';
echo '<div class="card-header py-3">';
echo '<h2 class="my-0 fw-normal fs-4">Solde aujourd\'hui</h2>';
echo '</div>';
echo '<div class="card-body">';
echo '<p class="card-title pricing-card-title text-center fs-1">' . ($result['sum(amount)']) . ' €</p>';
echo '</div>';
echo '</section>';

echo '<section class="card mb-4 rounded-3 shadow-sm">';
echo '<div class="card-header py-3">';
echo '<h1 class="my-0 fw-normal fs-4">Opérations de Juin 2023</h1>';
echo '</div>';
echo '<div class="card-body">';
echo '<table class="table table-striped table-hover align-middle">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col" colspan="2">Opération</th>';
echo '<th scope="col" class="text-end">Montant</th>';
echo '<th scope="col" class="text-end">Actions</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

$query = $accounts->prepare("SELECT * FROM `transaction` WHERE  MONTH(`date_transaction`) = 06 ORDER BY date_transaction DESC;");
$query->execute();
$result = $query->fetchAll();


foreach ($result as $transaction) {

    echo '<tr>';
    echo '<td width="50" class="ps-3">';
    echo '</td>';
    echo '<td>';
    echo '<time datetime="2023-07-10" class="d-block fst-italic fw-light">' . ($transaction['date_transaction']) . '</time>
                ' . ($transaction['name']) . '';
    echo '</td>';

    echo '<td class="text-end>';
    echo '<span class="rounded-pill text-nowrap bg-warning-subtle px-2">' . ($transaction['amount']) . '</span>';
    echo '</td>';

    echo '<td class="text-end text-nowrap">';
    echo '<a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
        <i class="bi bi-pencil"></i>
         </a>';
    echo '<a href="#" class="btn btn-outline-danger btn-sm rounded-circle">
        <i class="bi bi-trash"></i>
        </a>';
    echo '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

?>

</div>
<div class="card-footer">
    <nav class="text-center">
        <ul class="pagination d-flex justify-content-center m-2">
            <li class="page-item disabled">
                <span class="page-link">
                    <i class="bi bi-arrow-left"></i>
                </span>
            </li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Juin 2023</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="changeMonth.php">Mai 2023</a>
            </li>
            <li class="page-item">
                <span class="page-link">...</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="index.php">
                    <i class="bi bi-arrow-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
</section>
</div>

<div class="position-fixed bottom-0 end-0 m-3">
    <a href="add.php" class="btn btn-primary btn-lg rounded-circle">
        <i class="bi bi-plus fs-1"></i>
    </a>
</div>

<?php
include 'include/_footer.php';
?>