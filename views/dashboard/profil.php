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
                    src="/Tech_asa/public/images/avatar1.jpg"
                    alt="Jean Rakoto"
                    class="profile-avatar">

                    <div>

                        <h1>
                            Jean Rakoto
                        </h1>

                        <p class="profile-job">
                            Développeur Web Full Stack
                        </p>

                        <div class="profile-meta">

                            <span>⭐ 4.9</span>

                            <span>📍 Antananarivo</span>

                            <span>✔ 32 missions réalisées</span>

                        </div>

                    </div>

                </div>

                <div class="stats-grid">

                    <div class="stat-card">
                        <h3>32</h3>
                        <p>Missions réalisées</p>
                    </div>

                    <div class="stat-card">
                        <h3>4.9</h3>
                        <p>Note moyenne</p>
                    </div>

                    <div class="stat-card">
                        <h3>98%</h3>
                        <p>Satisfaction</p>
                    </div>

                    <div class="stat-card">
                        <h3>5 ans</h3>
                        <p>Expérience</p>
                    </div>

                </div>

                <div class="dashboard-card">

                    <h2>
                        À propos
                    </h2>

                    <p class="about-text">

                        Développeur spécialisé en PHP,
                        Laravel, JavaScript et MySQL.
                        J'aide les entreprises à créer
                        des solutions numériques modernes.

                    </p>

                </div>

                <div class="dashboard-card">

                    <h2>
                        Compétences
                    </h2>

                    <div class="skills-list">

                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>JavaScript</span>
                        <span>MySQL</span>
                        <span>Bootstrap</span>
                        <span>HTML</span>
                        <span>CSS</span>

                    </div>

                </div>

                <div class="dashboard-card">

                    <h2>
                        Portfolio
                    </h2>

                    <div class="portfolio-grid">

                        <div class="portfolio-card">
                            Projet E-commerce
                        </div>

                        <div class="portfolio-card">
                            Application Gestion
                        </div>

                        <div class="portfolio-card">
                            Site Vitrine
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php
require_once __DIR__ . '/../layouts/footer.php';
?>