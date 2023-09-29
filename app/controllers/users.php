<?php
include 'app/database/db.php';

$errMs = '';

function userAuth($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['user_name'];
    $_SESSION['admin'] = $user['admin'];
    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . 'admin/post/index.php');
    } else {
        header('location: ' . BASE_URL);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    $admin = 0;
    $name = trim($_POST['name']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);

    if ($name === '' || $email === '' || $passF === '') {
        $errMsg = "Not all fields are completed!";
    } elseif (mb_strlen($name, 'UTF8') < 2) {
        $errMsg = "Login must be more than 2 characters!";
    } else {
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email) {
            $errMsg = "This email is already registered";
        } else {
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'user_name' => $name,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);
            userAuth($user);
        }
    }
} else {
    $name = '';
    $email = '';
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    if ($email === '' || $pass === '') {
        $errMsg = "Not all fields are completed!";
    } else {
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])) {
            userAuth($existence);
        } else {
            $errMsg = "There is no user with this email";
        }
    }
} else {
    $email = '';
}
