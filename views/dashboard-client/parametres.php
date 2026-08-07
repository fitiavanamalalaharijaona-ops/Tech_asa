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
                        Paramètres
                    </h1>

                    <p>
                        Gérez votre compte et vos préférences.
                    </p>

                </div>

                <div class="dashboard-card">

                    <h2>
                        Informations du compte
                    </h2>

                    <form class="settings-form">

                        <div class="form-row">

                            <div class="form-group">

                                <label>
                                    Nom complet
                                </label>

                                <input
                                type="text"
                                value="Rakoto Entreprise">

                            </div>

                            <div class="form-group">

                                <label>
                                    Adresse email
                                </label>

                                <input
                                type="email"
                                value="contact@rakotoentreprise.com">

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group">

                                <label>
                                    Téléphone
                                </label>

                                <input
                                type="text"
                                value="0341234567">

                            </div>

                            <div class="form-group">

                                <label>
                                    Ville
                                </label>

                                <input
                                type="text"
                                value="Antananarivo">

                            </div>

                        </div>

                    </form>

                </div>

                <div class="dashboard-card">

                    <h2>
                        Sécurité
                    </h2>

                    <form class="settings-form">

                        <div class="form-group">

                            <label>
                                Mot de passe actuel
                            </label>

                            <input
                            type="password">

                        </div>

                        <div class="form-group">

                            <label>
                                Nouveau mot de passe
                            </label>

                            <input
                            type="password">

                        </div>

                        <div class="form-group">

                            <label>
                                Confirmer le mot de passe
                            </label>

                            <input
                            type="password">

                        </div>

                    </form>

                </div>

                <div class="dashboard-card">

                    <h2>
                        Notifications
                    </h2>

                    <div class="notification-item">

                        <input
                        type="checkbox"
                        checked>

                        <span>
                            Recevoir les notifications par email
                        </span>

                    </div>

                    <div class="notification-item">

                        <input
                        type="checkbox"
                        checked>

                        <span>
                            Recevoir les nouveaux messages
                        </span>

                    </div>

                    <div class="notification-item">

                        <input
                        type="checkbox">

                        <span>
                            Recevoir les offres et nouveautés
                        </span>

                    </div>

                </div>

                <div class="settings-actions">

                    <button class="save-btn">

                        Enregistrer les modifications

                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<?php
require_once __DIR__ . '/../layouts/footer.php';
?>