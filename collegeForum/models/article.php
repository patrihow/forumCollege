<?php

require(CONNEX_DIR); // Asegúrate de que esta constante esté definida y apunte a tu archivo de conexión

// Función para seleccionar todos los artículos
function article_select() {
    global $connex;
    $sql = "SELECT articles.*, user.username FROM articles INNER JOIN user ON articles.user_id = user.id ORDER BY created_at DESC";
    $result = mysqli_query($connex, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Función para insertar un nuevo artículo
function article_insert($request) {
    global $connex;
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "INSERT INTO articles (title, content, user_id) VALUES ('$title', '$content', '$user_id')";
    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return false;
    }
}

// Función para seleccionar un artículo por ID
function article_select_id($id) {
    global $connex;
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT articles.*, user.username FROM articles INNER JOIN user ON articles.user_id = user.id WHERE articles.id = '$id'";
    $result = mysqli_query($connex, $sql);
    return mysqli_fetch_array($result, MYSQLI_ASSOC);
}

// Función para actualizar un artículo
function article_update($request) {
    global $connex;
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE articles SET title='$title', content='$content' WHERE id='$id'";
    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Función para eliminar un artículo
function article_delete($id) {
    global $connex;
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "DELETE FROM articles WHERE id='$id'";
    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}

?>