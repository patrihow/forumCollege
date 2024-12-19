<?php

require(CONNEX_DIR); // Asegúrate de que esta constante esté definida y apunte a tu archivo de conexión

// Función para seleccionar todos los usuarios
function user_select() {
    global $connex; // Asegúrate de que $connex esté disponible
    $sql = "SELECT * FROM user ORDER BY name";
    $result = mysqli_query($connex, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Función para insertar un nuevo usuario
function user_insert($request) {
    global $connex;
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "INSERT INTO user (name, username, password, birthday) VALUES ('$name', '$username', '$password', '$birthday')";
    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return false;
    }
}

// Función para seleccionar un usuario por ID
function user_select_id($id) {
    global $connex;
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($connex, $sql);
    return mysqli_fetch_array($result, MYSQLI_ASSOC);
}

// Función para actualizar un usuario
function user_update($request) {
    global $connex;
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE user SET name='$name', username='$username', password='$password', birthday='$birthday' WHERE id='$id'";
    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Función para eliminar un usuario
function user_delete($id) {
    global $connex;
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "DELETE FROM user WHERE id='$id'";
    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}

?>