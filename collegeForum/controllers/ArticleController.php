<?php 

function article_controller_index() {
    require_once(CONNEX_DIR); 

    $query = "SELECT articles.*, users.username FROM articles JOIN users ON articles.author_id = users.id ORDER BY created_at DESC";
    $result = mysqli_query($conn, $query);

    $articles = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $articles[] = $row; 
        }
    }

    render("articles.php", ['articles' => $articles]); 
}

function article_controller_create() {
    return render("article/create.php"); 
}

function article_controller_store($request) {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=article'); 
        exit();
    }
    
    require_once(MODEL_DIR . "/article.php"); // Incluir el modelo de artículo
    $data = article_insert($request); // Insertar el nuevo artículo
    header('location:?controller=article&function=show&id=' . $data); // Redirigir a la vista del artículo creado
}

function article_controller_show($request) {
    $id = $request['id']; // Obtener el ID del artículo de la solicitud
    require_once(MODEL_DIR . "/article.php"); // Incluir el modelo de artículo
    $data = article_select_id($id); // Obtener los datos del artículo por ID
    return render("article/show.php", $data); // Renderizar la vista de detalles del artículo
}

function article_controller_edit($request) {
    $id = $request['id']; // Obtener el ID del artículo de la solicitud
    require_once(MODEL_DIR . "/article.php"); // Incluir el modelo de artículo
    $article = article_select_id($id); // Obtener los datos del artículo por ID
    return render("article/edit.php", ['article' => $article]); // Renderizar la vista de edición del artículo
}

function article_controller_update($request) {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=article'); 
        exit();
    }
    
    require_once(MODEL_DIR . "/article.php"); // Incluir el modelo de artículo
    $data = article_update($request); // Actualizar los datos del artículo
    if ($data) {
        header('location:?controller=article'); // Redirigir a la lista de artículos
    } else {
        echo "error"; // Manejo de errores
    }
}

function article_controller_delete($request) {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=article'); // Redirigir si no es una solicitud POST
        exit();
    }
    
    $id = $request['id']; // Obtener el ID del artículo de la solicitud
    require_once(MODEL_DIR . "/article.php"); // Incluir el modelo de artículo
    $data = article_delete($id); // Eliminar el artículo
    if ($data) {
        header('location:?controller=article'); // Redirigir a la lista de artículos
    } else {
        echo "error"; // Manejo de errores
    }
}