<div class="wrapper">
    <h1>Liste des Utilisateurs</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Nom d'utilisateur</th>
                <th>Date de naissance</th>
                <th>Show</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data as $row){
                    ?>

                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['birthday'] ?></td>
                    <td>
                        <a href="?controller=user&function=show&id=<?= $row['id'] ?>" class="main-button">Show</a>
                    </td>
                </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</div>