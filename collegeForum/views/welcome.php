
    <main class="bienvenue">
        <section class="section-hero">
            <div class="hero-text-box">
                <h1>Bienvenue sur le Forum des Étudiants du Collège Maisonneuve</h1>
                <h2>Un forum dédié à favoriser les échanges entre étudiants</h2>
                <p class="hero-description">
                    Rejoignez-nous pour enrichir votre expérience d'apprentissage, partager vos idées et collaborer avec d'autres étudiants dans un espace convivial et interactif
                </p>
            </div>
        </section>

        <section class="registre">
    <h2>Connexion</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p> 
    <?php endif; ?>
    <form action="?controller=user&function=login" method="POST"> 
        <label for="username">Utilisateur:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        
        <button class="main-button" type="submit">Connexion</button>
    </form>
    <p class="small"><strong>Première utilisation?</strong> <a href="?controller=user&function=register">Créer un compte</a></p>
</section>
    </main>
