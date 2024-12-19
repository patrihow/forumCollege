<div class="wrapper">
    <form action="?controller=user&function=store" method="post">
    <h2>Registre</h2>

    <label for="name">Nom</label>
    <input type="text" id="name" name="name" required>
    
    <label for="username">Nom d'utilisateur</label>
    <input type="text" id="username" name="username" required>
    
    <label for="birthday">Date de naissance</label>
    <input type="date" id="birthday" name="birthday" required>

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" class="main-button" value="save">S'inscrire</button>
</form>
</div>