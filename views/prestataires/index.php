<?php
require_once __DIR__ . '/../layouts/header.php';
?>

<section class="workers-page">

    <div class="container">

        <div class="page-header">

            <h1>Nos Prestataires</h1>

            <p>
                Trouvez le professionnel idéal pour réaliser vos projets.
            </p>

        </div>

        <div class="workers-search">

            <div class="search-container">

                <input
                type="text"
                placeholder="🔍 Développeur, Électricien, Menuisier...">

                <button>
                    Rechercher
                </button>

            </div>

            <div class="filter-chips">

                <button class="filter-chip">
                    📍 Toutes les villes
                </button>

                <button class="filter-chip">
                    ⭐ Toutes les notes
                </button>

            </div>

        </div>

        <div class="workers-list">

            <div class="worker-card-horizontal">

                <img
                src="/Tech_asa/public/images/avatar1.jpg"
                alt="Jean Rakoto"
                class="worker-avatar">

                <div class="worker-content">

                    <div class="worker-top">

                        <div>

                            <h3>Jean Rakoto</h3>

                            <p class="worker-job">
                                Développeur Web
                            </p>

                        </div>

                        <div class="worker-rating">
                            ⭐ 4.9
                        </div>

                    </div>

                    <div class="worker-meta">

                        <span>📍 Antananarivo</span>

                        <span>✔ 32 missions réalisées</span>

                    </div>

                    <p class="worker-description">
                        Spécialisé dans la création de sites web,
                        applications de gestion et solutions numériques.
                    </p>

                    <div class="worker-skills">

                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                        <span>Laravel</span>

                    </div>

                </div>

                <a
                href="/Tech_asa/views/prestataires/profil.php"
                class="profile-btn">

                    Voir profil

                </a>

            </div>

        </div>

        <div class="pagination">

            <a href="#" class="active">1</a>

            <a href="#">2</a>

            <a href="#">3</a>

            <a href="#">4</a>

            <a href="#">></a>

        </div>

    </div>

</section>

<?php
require_once __DIR__ . '/../layouts/footer.php';
?>