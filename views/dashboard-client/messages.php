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

                </div>

                <div class="messages-layout">

                    <div class="conversations-panel">

                        <div class="conversation active">

                            <img src="/Tech_asa/public/images/avatar1.jpg">

                            <div>

                                <h4>
                                    Jean Rakoto
                                </h4>

                                <p>
                                    Bonjour...
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="chat-panel">

                        <div class="chat-header">

                            <h3>
                                Jean Rakoto
                            </h3>

                        </div>

                        <div class="chat-body">

                            <div class="message received">
                                Bonjour 👋
                            </div>

                            <div class="message sent">
                                Bonjour Jean
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