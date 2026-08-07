<?php
require_once __DIR__ . '/../layouts/header.php';
?>

<section class="offers-page">

    <div class="container">

        <div class="page-header">

            <h1>
                Appels d'offres
            </h1>

            <p>
                Découvrez les projets publiés par les clients.
            </p>

        </div>

        <div class="offers-search">

            <input
            type="text"
            placeholder="🔍 Rechercher un projet...">

            <button>
                Rechercher
            </button>

        </div>

        <div class="offers-grid">

            <div class="offer-card">

                <div class="offer-top">

                    <span class="offer-category">
                        💻 Développement
                    </span>

                    <span class="offer-budget">
                        500 000 Ar
                    </span>

                </div>

                <h3>
                    Création d'un site web e-commerce
                </h3>

                <p>
                    Je recherche un développeur capable
                    de créer une boutique en ligne moderne.
                </p>

                <div class="offer-meta">

                    <span>
                        📍 Antananarivo
                    </span>

                    <span>
                        ⏰ 7 jours restants
                    </span>

                </div>

                <a href="/Tech_asa/views/appels/show.php" class="offer-btn">
                    Voir détails
                </a>

            </div>

            <div class="offer-card">

                <div class="offer-top">

                    <span class="offer-category">
                        ⚡ Électricité
                    </span>

                    <span class="offer-budget">
                        250 000 Ar
                    </span>

                </div>

                <h3>
                    Installation électrique maison
                </h3>

                <p>
                    Travaux d'installation électrique
                    pour une maison neuve.
                </p>

                <div class="offer-meta">

                    <span>
                        📍 Toamasina
                    </span>

                    <span>
                        ⏰ 5 jours restants
                    </span>

                </div>

                <a href="#" class="offer-btn">
                    Voir détails
                </a>

            </div>

        </div>

    </div>

</section>

<?php
require_once __DIR__ . '/../layouts/footer.php';
?>