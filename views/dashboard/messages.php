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
                        Messages
                    </h1>

                    <p>
                        Discutez avec vos clients.
                    </p>

                </div>

                <div class="messages-layout">

                    <div class="conversations-panel">

                        <div class="conversation active">

                            <img
                            src="/Tech_asa/public/images/avatar1.jpg"
                            alt="">

                            <div>

                                <h4>
                                    Rakoto Entreprise
                                </h4>

                                <p>
                                    Bonjour Jean...
                                </p>

                            </div>

                        </div>

                        <div class="conversation">

                            <img
                            src="/Tech_asa/public/images/avatar2.jpg"
                            alt="">

                            <div>

                                <h4>
                                    Mada Business
                                </h4>

                                <p>
                                    Merci pour votre devis.
                                </p>

                            </div>

                        </div>

                        <div class="conversation">

                            <img
                            src="/Tech_asa/public/images/avatar3.jpg"
                            alt="">

                            <div>

                                <h4>
                                    Tech Mada
                                </h4>

                                <p>
                                    Quand pouvez-vous commencer ?
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="chat-panel">

                        <div class="chat-header">

                            <img
                            src="/Tech_asa/public/images/avatar1.jpg"
                            alt="">

                            <div>

                                <h3>
                                    Rakoto Entreprise
                                </h3>

                                <span>
                                    En ligne
                                </span>

                            </div>

                        </div>

                        <div class="chat-body">

                            <div class="message received">
                                Bonjour Jean 👋
                            </div>

                            <div class="message sent">
                                Bonjour, comment puis-je vous aider ?
                            </div>

                            <div class="message received">
                                Nous souhaitons discuter du projet e-commerce.
                            </div>

                            <div class="message sent">
                                Aucun problème, je suis disponible.
                            </div>

                        </div>

                        <div class="chat-footer">

                            <input
                            type="text"
                            placeholder="Écrire un message...">

                            <button>
                                Envoyer
                            </button>

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