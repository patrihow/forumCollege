<div class="wrapper">
<h2>Registre</h2>
<form action="?controller=user&function=register" method="post">
    <label for="name">Nom</label>
    <input type="text" name="name" required>
    
    <label for="username">Nom d'utilisateur</label>
    <input type="text" name="username" required>
    
    <label for="password">Mot de passe</label>
    <input type="password" name="password" required>
    
    <label for="birthday">Date de naissance</label>
    <input type="date" name="birthday" required>
    
    <input type="submit" value="Registre">
</form>
</div>