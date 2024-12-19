<main>
    <h1>Articles</h1>
    <?php if (!empty($articles)): ?>
        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <h2><?php echo htmlspecialchars($article['title']); ?></h2>
                    <p><?php echo htmlspecialchars($article['content']); ?></p>
                    <p><em>Écrit par: <?php echo htmlspecialchars($article['username']); ?> le <?php echo $article['created_at']; ?></em></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun article disponible</p>
    <?php endif; ?>
</main>


