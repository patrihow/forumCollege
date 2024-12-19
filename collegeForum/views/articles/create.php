<div class="wrapper">
        
        <form action="?controller=articles&function=store" method="post">
            <h1>Rédiger un article</h1>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title">

            <label for="content">Article</label>
            <textarea name="content" id="content"></textarea>

            <label for="created_at">Date</label>
            <input type="date" id="created_at" name="created_at">

            <label for="username">Auteur</label>
            <input type="text" id="username" name="username">

            <button type="submit" class="main-button">Publier</button>
            <button type="button" class="main-button">Modifier</button>
            <button type="button" class="bouton-rouge">Supprimer</button>
        </form>

    </div>