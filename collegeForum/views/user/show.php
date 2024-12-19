<div class="wrapper">
        <h1>Détails de l'utilisateur</h1>
    
    <p><strong>Nom: </strong><?= $data['name']; ?></p>
    <p><strong>Nom d'utilisateur: </strong><?= $data['username']; ?> </p>
    <p><strong>Date de naissance: </strong><?= $data['birthday']; ?> </p>

    <a href="?controller=user&function=edit&id=<?= $data['id']; ?>" class="main-button">Modifier</a>
    
    <form action="?controller=user&function=delete" method="post">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <input type="submit" value="Delete" class="bouton-rouge">
    </form>
    </div>
    