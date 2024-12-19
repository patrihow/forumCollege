<div class="wrapper">
    <form action="?controller=user&function=update" method="post">
    <input type="hidden" name="id"  value="<?= $data['user']['id'];?>">
    <h2>Registre</h2>

    <label for="name">Nom</label>
    <input type="text" id="name" name="name" value="<?= $data['user']['name'];?>">
    
    <label for="username">Nom d'utilisateur</label>
    <input type="text" id="username" name="username" value="<?= $data['user']['username'];?>">
    
    <label for="birthday">Date de naissance</label>
    <input type="date" id="birthday" name="birthday" value="<?= $data['user']['birthday'];?>">

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" value="<?= $data['user']['password'];?>">

    <button type="submit" class="main-button" value="save">S'inscrire</button>
</form>
</div>