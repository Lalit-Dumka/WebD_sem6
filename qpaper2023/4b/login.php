<?php
include "db_con.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "
    <h1>Login failed!</h1>
    <p>Username or password is incorrect.</p>
    <button onclick=\"window.location.href='index.html'\">Try again</button>
    ";
}

$conn->close();


?>