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
                        Mes projets
                    </h1>

                    <p>
                        Gérez vos projets publiés.
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
                            Budget : 500 000 Ar
                        </p>

                        <p>
                            12 candidatures reçues
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

                            <span class="status pending">
                                Recherche prestataire
                            </span>

                        </div>

                        <p>
                            Budget : 1 200 000 Ar
                        </p>

                        <p>
                            5 candidatures reçues
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