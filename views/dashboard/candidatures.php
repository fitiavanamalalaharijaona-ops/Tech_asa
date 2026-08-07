<?php
require_once __DIR__ . '/../layouts/header.php';
?>

<section class="dashboard">

    <div class="container">

        <div class="dashboard-content">

            <?php require_once __DIR__ . '/sidebar.php'; ?>

            <div class="dashboard-main">

                <div class="dashboard-header">

                    <h1>
                        Mes candidatures
                    </h1>

                    <p>
                        Suivez l'évolution de vos candidatures.
                    </p>

                </div>

                <div class="dashboard-card">

                    <table class="dashboard-table">

                        <thead>

                            <tr>

                                <th>Projet</th>

                                <th>Client</th>

                                <th>Budget</th>

                                <th>Date</th>

                                <th>Statut</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>Site E-commerce</td>

                                <td>Rakoto Entreprise</td>

                                <td>500 000 Ar</td>

                                <td>15/08/2026</td>

                                <td>
                                    <span class="status pending">
                                        En attente
                                    </span>
                                </td>

                            </tr>

                            <tr>

                                <td>Application Mobile</td>

                                <td>Tech Mada</td>

                                <td>1 200 000 Ar</td>

                                <td>12/08/2026</td>

                                <td>
                                    <span class="status accepted">
                                        Acceptée
                                    </span>
                                </td>

                            </tr>

                            <tr>

                                <td>Logiciel Gestion</td>

                                <td>Mada Business</td>

                                <td>800 000 Ar</td>

                                <td>10/08/2026</td>

                                <td>
                                    <span class="status rejected">
                                        Refusée
                                    </span>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</section>

<?php
require_once __DIR__ . '/../layouts/footer.php';
?>