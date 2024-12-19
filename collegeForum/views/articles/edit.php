<div class="wrapper">
    <form action="?controller=articles&function=update" method="post">
        <h1>Modifier l'article</h1>
        
        <input type="hidden" name="id" value="<?php ($article['id']); ?>">

        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="<?php ($article['title']); ?>" required>

        <label for="content">Article</label>
        <textarea name="content" id="content" required><?php ($article['content']); ?></textarea>

        <label for="created_at">Date</label>
        <input type="date" id="created_at" name="created_at" value="<?php ($article['created_at']); ?>" required>

        <label for="username">Auteur</label>
        <input type="text" id="username" name="username" value="<?php ($article['username']); ?>" required>

        <button type="submit" class="main-button">Mettre à jour</button>
        <button type="button" class="main-button" onclick="window.location.href='?controller=articles'">Annuler</button>
    </form>
</div>