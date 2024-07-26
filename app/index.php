<?php
include 'include/_header.php';
?>

<div class="container">
    <section class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h2 class="my-0 fw-normal fs-4">Solde aujourd'hui</h2>
        </div>
        <div class="card-body">
            <p class="card-title pricing-card-title text-center fs-1">625,34 €</p>
        </div>
    </section>

    <section class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            <h1 class="my-0 fw-normal fs-4">Opérations de Juillet 2023</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col" colspan="2">Opération</th>
                        <th scope="col" class="text-end">Montant</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="50" class="ps-3">
                        </td>
                        <td>
                            <time datetime="2023-07-10" class="d-block fst-italic fw-light">10/07/2023</time>
                            Bar
                        </td>
                        <td class="text-end">
                            <span class="rounded-pill text-nowrap bg-warning-subtle px-2">
                                - 32,00 €
                            </span>
                        </td>
                        <td class="text-end text-nowrap">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm rounded-circle">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td width="50" class="ps-3">
                            <i class="bi bi-car-front fs-3"></i>
                        </td>
                        <td>
                            <time datetime="2023-07-10" class="d-block fst-italic fw-light">10/07/2023</time>
                            Essence voiture
                        </td>
                        <td class="text-end">
                            <span class="rounded-pill text-nowrap bg-warning-subtle px-2">
                                - 94,00 €
                            </span>
                        </td>
                        <td class="text-end text-nowrap">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm rounded-circle">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td width="50" class="ps-3">
                        </td>
                        <td>
                            <time datetime="2023-07-08" class="d-block fst-italic fw-light">8/07/2023</time>
                            Facture électricité
                        </td>
                        <td class="text-end">
                            <span class="rounded-pill text-nowrap bg-warning-subtle px-2">
                                - 83,00 €
                            </span>
                        </td>
                        <td class="text-end text-nowrap">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm rounded-circle">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td width="50" class="ps-3">
                            <i class="bi bi-house-door fs-3"></i>
                        </td>
                        <td>
                            <time datetime="2023-07-05" class="d-block fst-italic fw-light">5/07/2023</time>
                            Loyer de Juillet 2023
                        </td>
                        <td class="text-end">
                            <span class="rounded-pill text-nowrap bg-warning-subtle px-2">
                                - 432,00 €
                            </span>
                        </td>
                        <td class="text-end text-nowrap">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm rounded-circle">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td width="50" class="ps-3">
                            <i class="bi bi-train-front fs-3"></i>
                        </td>
                        <td>
                            <time datetime="2023-07-02" class="d-block fst-italic fw-light">2/07/2023</time>
                            Billets de train Lille
                        </td>
                        <td class="text-end">
                            <span class="rounded-pill text-nowrap bg-warning-subtle px-2">
                                - 89,00 €
                            </span>
                        </td>
                        <td class="text-end text-nowrap">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm rounded-circle">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td width="50" class="ps-3">
                            <i class="bi bi-bandaid fs-3"></i>
                        </td>
                        <td>
                            <time datetime="2023-07-02" class="d-block fst-italic fw-light">2/07/2023</time>
                            Reboursement sécurité sociale
                        </td>
                        <td class="text-end">
                            <span class="rounded-pill text-nowrap bg-success-subtle px-2">
                                + 48,00 €
                            </span>
                        </td>
                        <td class="text-end text-nowrap">
                            <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm rounded-circle">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
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
                        <span class="page-link">Juillet 2023</span>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="index.php">Juin 2023</a>
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