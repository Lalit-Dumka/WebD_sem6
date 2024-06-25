<?php
$user = $_POST['username'];
$pass = $_POST['password'];

// if($user === 'admin' && $pass === 'admin'){
    setcookie('user', $user, time() + 3600 * 24 * 3, '/');
    header('Location: home.php');
    exit;
// }
// else{
//     echo 'Invalid username or password';
// }


?>