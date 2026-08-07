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
                        Tableau de bord
                    </h1>

                    <p>
                        Bienvenue Jean Rakoto 👋
                    </p>

                </div>

                <div class="stats-grid">

                    <div class="stat-card">

                        <h3>
                            12
                        </h3>

                        <p>
                            Candidatures envoyées
                        </p>

                    </div>

                    <div class="stat-card">

                        <h3>
                            5
                        </h3>

                        <p>
                            Missions en cours
                        </p>

                    </div>

                    <div class="stat-card">

                        <h3>
                            32
                        </h3>

                        <p>
                            Missions réalisées
                        </p>

                    </div>

                    <div class="stat-card">

                        <h3>
                            ⭐ 4.9
                        </h3>

                        <p>
                            Note moyenne
                        </p>

                    </div>

                </div>

                <div class="dashboard-card">

                    <h2>
                        Dernières candidatures
                    </h2>

                    <table class="dashboard-table">

                        <thead>

                            <tr>

                                <th>
                                    Projet
                                </th>

                                <th>
                                    Budget
                                </th>

                                <th>
                                    Statut
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>
                                    Site E-commerce
                                </td>

                                <td>
                                    500 000 Ar
                                </td>

                                <td>
                                    <span class="status pending">
                                        En attente
                                    </span>
                                </td>

                            </tr>

                            <tr>

                                <td>
                                    Application Mobile
                                </td>

                                <td>
                                    1 200 000 Ar
                                </td>

                                <td>
                                    <span class="status accepted">
                                        Acceptée
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