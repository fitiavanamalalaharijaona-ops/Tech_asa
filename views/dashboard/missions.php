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
                        Mes missions
                    </h1>

                    <p>
                        Gérez vos projets en cours.
                    </p>

                </div>

                <div class="missions-grid">

                    <div class="mission-card">

                        <div class="mission-top">

                            <h3>
                                Site E-commerce
                            </h3>

                            <span class="status-progress">
                                En cours
                            </span>

                        </div>

                        <p>
                            👤 Rakoto Entreprise
                        </p>

                        <p>
                            💰 500 000 Ar
                        </p>

                        <p>
                            📅 Livraison : 30/08/2026
                        </p>

                        <a href="#" class="mission-btn">
                            Voir détails
                        </a>

                    </div>

                    <div class="mission-card">

                        <div class="mission-top">

                            <h3>
                                Application Mobile
                            </h3>

                            <span class="status-finished">
                                Terminée
                            </span>

                        </div>

                        <p>
                            👤 Tech Mada
                        </p>

                        <p>
                            💰 1 200 000 Ar
                        </p>

                        <p>
                            📅 Livrée le 01/08/2026
                        </p>

                        <a href="#" class="mission-btn">
                            Voir détails
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php
require_once __DIR__ . '/../layouts/footer.php';
?>