<?php
require_once __DIR__ . '/../layouts/header.php';
?>

<section class="dashboard">

    <div class="container">

        <div class="dashboard-content">

<?php require_once __DIR__ . '/../dashboard-client/sidebar.php';?>
            <div class="dashboard-main">

                <div class="profile-container">

                    <div class="profile-header">

                        <img
                        src="/Tech_asa/public/images/avatar1.jpg"
                        alt="Jean Rakoto"
                        class="profile-avatar">

                        <h1>
                            Jean Rakoto
                        </h1>

                        <p class="profile-job">
                            Développeur Web
                        </p>

                        <div class="profile-meta">

                            <span>
                                ⭐ 4.9
                            </span>

                            <span>
                                📍 Antananarivo
                            </span>

                            <span>
                                ✔ 32 missions réalisées
                            </span>

                        </div>

                        <div class="profile-actions">

                            <a href="#" class="btn-contact">
                                Contacter
                            </a>

                            <a href="#" class="btn-hire">
                                Engager
                            </a>

                        </div>

                    </div>

                    <div class="profile-section">

                        <h2>
                            À propos
                        </h2>

                        <p>
                            Développeur Web passionné avec plus de 5 ans
                            d'expérience dans la création de sites web,
                            applications de gestion et solutions numériques
                            adaptées aux besoins des entreprises et particuliers.
                        </p>

                    </div>

                    <div class="profile-section">

                        <h2>
                            Compétences
                        </h2>

                        <div class="skills-list">

                            <span>PHP</span>
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>
                            <span>Bootstrap</span>
                            <span>HTML</span>
                            <span>CSS</span>

                        </div>

                    </div>

                    <div class="profile-section">

                        <h2>
                            Expérience
                        </h2>

                        <div class="experience-card">

                            <h3>
                                Développeur Full Stack Freelance
                            </h3>

                            <p>
                                Plus de 50 projets réalisés pour des entreprises,
                                associations et particuliers.
                            </p>

                        </div>

                    </div>

                    <div class="profile-section">

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

                    <div class="profile-section">

                        <h2>
                            Avis Clients
                        </h2>

                        <div class="review-card">

                            <strong>
                                ⭐⭐⭐⭐⭐ Rina
                            </strong>

                            <p>
                                Excellent travail, très professionnel
                                et respecte les délais.
                            </p>

                        </div>

                        <div class="review-card">

                            <strong>
                                ⭐⭐⭐⭐⭐ Toky
                            </strong>

                            <p>
                                Très satisfait du résultat obtenu.
                            </p>

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