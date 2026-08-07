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
                        Tableau de bord Client
                    </h1>

                    <p>
                        Bienvenue sur votre espace client.
                    </p>

                </div>

                <div class="stats-grid">

                    <div class="stat-card">

                        <h3>12</h3>

                        <p>Projets publiés</p>

                    </div>

                    <div class="stat-card">

                        <h3>5</h3>

                        <p>Prestataires engagés</p>

                    </div>

                    <div class="stat-card">

                        <h3>9</h3>

                        <p>Missions terminées</p>

                    </div>

                    <div class="stat-card">

                        <h3>3</h3>

                        <p>Messages non lus</p>

                    </div>

                </div>

                <div class="dashboard-card">

                    <h2>
                        Activité récente
                    </h2>

                    <table class="dashboard-table">

                        <thead>

                            <tr>

                                <th>Projet</th>

                                <th>Budget</th>

                                <th>Statut</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>Site E-commerce</td>

                                <td>500 000 Ar</td>

                                <td>
                                    <span class="status accepted">
                                        En cours
                                    </span>
                                </td>

                            </tr>

                            <tr>

                                <td>Application Mobile</td>

                                <td>1 200 000 Ar</td>

                                <td>
                                    <span class="status pending">
                                        Recherche prestataire
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