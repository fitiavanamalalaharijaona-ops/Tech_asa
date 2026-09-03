<footer>

    <div class="container footer-content">

        <div class="footer-brand">

            <img
            src="/Tech_asa/public/images/logo.png"
            alt="Tech Asa">
            

            <p>
                Plateforme de mise en relation entre clients
                et prestataires à Madagascar.
            </p>

        </div>

        <div class="footer-links">

            <h3>Navigation</h3>

            <a href="/Tech_asa/views/home/index.php">
                Accueil
            </a>

            <a href="/Tech_asa/views/prestataires/index.php">
                Prestataires
            </a>

            <a href="#">
                Appels d'offres
            </a>

            <a href="#">
                À propos
            </a>

        </div>

        <div class="footer-contact">

            <h3>Contact</h3>

            <p>📧 contact@techasa.mg</p>

            <p>📞 +261 XX XX XXX XX</p>

            <p>📍 Madagascar</p>

        </div>

    </div>

    <div class="footer-bottom">

        © 2026 Tech Asa - Tous droits réservés

    </div>

</footer>

<div class="auth-modal" id="authModal">
    <div class="auth-box">
        <span class="close-modal" id="closeModal">&times;</span>

        <form id="loginForm" method="POST" action="">
            <h2>
                <i class="fa-solid fa-right-to-bracket"></i>
                Connexion
            </h2>

            <input type="email" name="email" placeholder="Adresse email" required>
            
            <div class="password-field">

                <input type="password" name="password" placeholder="Mot de passe" id="loginPassword" required>
                <i class="fa-solid fa-eye toggle-password" data-target="loginPassword"></i>
            </div>

            <button type="submit">Se connecter</button>
            <p>Pas encore de compte ? <a href="#" id="showRegister">S'inscrire</a></p>
        </form>

        <form id="registerForm" method="POST" action="" style="display:none;">
            <h2>
                <i class="fa-solid fa-user-plus"></i>
                Inscription
            </h2>

            <input type="text" name="nom_complet" placeholder="Nom complet" required>
            <input type="email" name="email" placeholder="Adresse email" required>
            
            <div class="password-field">
                <input type="password" name="password" placeholder="Mot de passe" id="registerPassword" required>
                <i class="fa-solid fa-eye toggle-password" data-target="registerPassword"></i>
            </div>
            
            <select name="role">
                <option value="client">Client</option>
                <option value="prestataire">Prestataire</option>
            </select>
            
            <button type="submit">S'inscrire</button>
            <p>Déjà un compte ? <a href="#" id="showLogin">Se connecter</a></p>
        </form>
    </div>
</div>


<script src="/Tech_asa/public/js/main.js"></script>

<script src="/Tech_asa/public/js/auth.js"></script>

</body>
</html>