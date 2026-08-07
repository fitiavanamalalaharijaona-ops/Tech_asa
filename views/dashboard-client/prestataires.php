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
                        Prestataires favoris
                    </h1>

                    <p>
                        Retrouvez les professionnels que vous avez enregistrés.
                    </p>

                </div>

                <div class="workers-grid">

                    <div class="worker-card">

                        <img
                        src="/Tech_asa/public/images/avatar1.jpg"
                        alt="Jean Rakoto">

                        <h3>
                            Jean Rakoto
                        </h3>

                        <span>
                            Développeur Web
                        </span>

                        <p>
                            📍 Antananarivo
                        </p>

                        <div class="rating">
                            ⭐ 4.9
                        </div>

                        <div class="worker-actions">

                            <a href="#" class="profile-btn">
                                Voir profil
                            </a>

                            <a href="#" class="message-btn">
                                Message
                            </a>

                        </div>

                    </div>

                    <div class="worker-card">

                        <img
                        src="/Tech_asa/public/images/avatar2.jpg"
                        alt="Sarah Ranaivo">

                        <h3>
                            Sarah Ranaivo
                        </h3>

                        <span>
                            Designer Graphique
                        </span>

                        <p>
                            📍 Antananarivo
                        </p>

                        <div class="rating">
                            ⭐ 4.8
                        </div>

                        <div class="worker-actions">

                            <a href="#" class="profile-btn">
                                Voir profil
                            </a>

                            <a href="#" class="message-btn">
                                Message
                            </a>

                        </div>

                    </div>

                    <div class="worker-card">

                        <img
                        src="/Tech_asa/public/images/avatar3.jpg"
                        alt="Toky Rabe">

                        <h3>
                            Toky Rabe
                        </h3>

                        <span>
                            Électricien
                        </span>

                        <p>
                            📍 Toamasina
                        </p>

                        <div class="rating">
                            ⭐ 4.7
                        </div>

                        <div class="worker-actions">

                            <a href="#" class="profile-btn">
                                Voir profil
                            </a>

                            <a href="#" class="message-btn">
                                Message
                            </a>

                        </div>

                    </div>

                    <div class="worker-card">

                        <img
                        src="/Tech_asa/public/images/avatar4.jpg"
                        alt="Mickael Andria">

                        <h3>
                            Mickael Andria
                        </h3>

                        <span>
                            Menuisier
                        </span>

                        <p>
                            📍 Fianarantsoa
                        </p>

                        <div class="rating">
                            ⭐ 4.9
                        </div>

                        <div class="worker-actions">

                            <a href="#" class="profile-btn">
                                Voir profil
                            </a>

                            <a href="#" class="message-btn">
                                Message
                            </a>

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