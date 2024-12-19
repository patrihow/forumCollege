<div class="wrapper">
    <h1>Détails de l'article</h1>

    <p><strong>Titre: </strong><?= ($data['title']); ?></p>
    <p><strong>Auteur: </strong><?= ($data['username']); ?></p>
    <p><strong>Date: </strong><?= ($data['created_at']); ?></p>
    <p><strong>Article: </strong></p>
    <p><?= (($data['content'])); ?></p>

    <a href="?controller=articles&function=edit&id=<?= $data['id']; ?>" class="main-button">Modifier</a>
    
    <form action="?controller=articles&function=delete" method="post" style="display:inline;">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <input type="submit" value="Supprimer" class="bouton-rouge">
    </form>

    <a href="?controller=articles" class="main-button">Retour à la liste</a>
</div>