<div class="wrapper">
    <h1>Liste des articles</h1>
    <a href="?controller=articles&function=create" class="main-button">Créer un nouvel article</a>

    <?php if (!empty($data)): ?>
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $article): ?>
                    <tr>
                        <td><?php ($article['title']); ?></td>
                        <td><?php ($article['username']); ?></td>
                        <td><?php ($article['created_at']); ?></td>
                        <td>
                            <a href="?controller=articles&function=show&id=<?php echo $article['id']; ?>">Voir</a>
                            <a href="?controller=articles&function=edit&id=<?php echo $article['id']; ?>">Modifier</a>
                            <form action="?controller=articles&function=delete" method="post" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
                                <button type="submit" class="bouton-rouge">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
</div>