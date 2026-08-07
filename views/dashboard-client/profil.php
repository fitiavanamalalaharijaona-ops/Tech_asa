<?php
require_once __DIR__ . '/../layouts/header.php';
?>

<section class="dashboard">

    <div class="container">

        <div class="dashboard-content">

            <?php require_once __DIR__ . '/sidebar.php'; ?>

            <div class="dashboard-main">

                <div class="profile-header-card">

                    <img
                    src="/Tech_asa/public/images/avatar-client.jpg"
                    class="profile-avatar">

                    <div>

                        <h1>
                            Rakoto Entreprise
                        </h1>

                        <p class="profile-job">
                            Client
                        </p>

                        <div class="profile-meta">

                            <span>
                                📍 Antananarivo
                            </span>

                            <span>
                                12 projets publiés
                            </span>

                        </div>

                    </div>

                </div>

                <div class="dashboard-card">

                    <h2>
                        À propos
                    </h2>

                    <p>
                        Entreprise spécialisée dans le commerce
                        et la distribution.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<?php
require_once __DIR__ . '/../layouts/footer.php';
?>