<?php 

function user_controller_login() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = safe($_POST['username']);
        $password = safe($_POST['password']);

        if (empty($username) || empty($password)) {
            $error = "Por favor, complete todos los campos.";
        } else {
            require_once(CONNEX_DIR); 

            $query = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $query);
            $user = mysqli_fetch_assoc($result);

            if ($user && password_verify($password, $user['password'])) {

                session_start();
                $_SESSION['username'] = $username; 
                header("Location: ?controller=article&function=index"); 
                exit();
            } else {
                $error = "Nom d'utilisateur ou mot de passe incorrect.";
            }
        }
    }

    render("welcome.php", ['error' => $error ?? null]); 
}

function user_controller_register($request) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = isset($request['name']) ? $request['name'] : '';
        $username = isset($request['username']) ? $request['username'] : '';
        $password = isset($request['password']) ? $request['password'] : '';
        $birthday = isset($request['birthday']) ? $request['birthday'] : '';

        if (empty($name) || empty($username) || empty($password) || empty($birthday)) {
            echo "Tous les champs sont obligatoires";
            return;
        }

        global $conn; 

        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Le nom d'utilisateur est déjà pris. Veuillez en choisir un autre.";
            $stmt->close();
            return;
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user (name, username, password, birthday) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $username, $hashedPassword, $birthday);

        if ($stmt->execute()) {
            echo "Enregistrement réussi. Vous pouvez maintenant vous connecter";
        } else {
            echo "Erreur lors de l'enregistrement de l'utilisateur: " . $stmt->error;
        }

        $stmt->close();
    } else {
        header("Location: ?controller=user&function=register");
        exit();
    }
}

function user_controller_index() {
    require_once(MODEL_DIR . "/user.php");
    $data = user_select(); 
    return render("user/index.php", $data); 
}

function user_controller_create() {
    return render("user/create.php"); 
}

function user_controller_store($request) {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=user'); 
        exit();
    }
    
    require_once(MODEL_DIR . "/user.php"); 
    $data = user_insert($request); 
    header('location:?controller=user&function=show&id=' . $data); 
}

function user_controller_show($request) {
    $id = $request['id']; 
    require_once(MODEL_DIR . "/user.php"); 
    $data = user_select_id($id); 
    return render("user/show.php", $data); 
}

function user_controller_edit($request) {
    $id = $request['id']; 
    require_once(MODEL_DIR . "/user.php"); 
    $user = user_select_id($id); 
    return render("user/edit.php", ['user' => $user]); 
}

function user_controller_update($request) {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=user'); 
        exit();
    }
    
    require_once(MODEL_DIR . "/user.php"); 
    $data = user_update($request); 
    if ($data) {
        header('location:?controller=user');
    } else {
        echo "error"; 
    }
}

function user_controller_delete($request) {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('location:?controller=user');
        exit();
    }
    
    $id = $request['id']; 
    require_once(MODEL_DIR . "/user.php"); 
    $data = user_delete($id); 
    if ($data) {
        header('location:?controller=user'); 
    } else {
        echo "error"; 
    }
}