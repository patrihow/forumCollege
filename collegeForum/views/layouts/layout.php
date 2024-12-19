<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/main.css">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <div class="logo">
            <img src="resources/images/logo-college.jpg" alt="Logo Maisonneuve Forum">
            <p class="titres small">Maisonneuve <strong>Forum</strong></p>
        </div>
        <nav class="menu-nav">
            <ul>
                <li>
                    <a href="?controller=articles&function=index" aria-label="Consulter les articles">
                        Articles
                    </a>
                </li>
                <li>
                    <a href="?controller=articles&function=create" aria-label="Rédiger un nouvel article">
                        Rédiger un article
                    </a>
                </li>
                <li>
                    <a href="?controller=articles&function=my_articles" aria-label="Voir mes articles">
                        Mes articles
                    </a>
                </li>
                <li>
                    <a href="?controller=user&function=login" aria-label="Connexion">
                        Connexion
                    </a>
                </li>
                <li>
                    <a href="?controller=user&function=logout" aria-label="Se déconnecter de votre compte">
                        Déconnexion
                    </a>
                </li>
            </ul>       
        </nav>
    </header>
    <main>
        <div class="contenu">
            <?php
            
            if (isset($content)) {
                echo $content; 
            }
            ?>
        </div>
    </main>
    <footer>
        <p class="footer-texte">Forum des Étudiants. Tous droits réservés.</p>
    </footer>
</body>
</html>