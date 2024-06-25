<?php
// if session is already started, it will not start a new session
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        if (is_numeric($age) && $age > 0) {
            if (strlen($name) <= 20 && strlen($name) >= 10) {
                echo("Welcome $name");
                exit();
            } else {
                $_SESSION['error'] = "Name should be between 10 and 20 characters";
            }
        } else {
            $_SESSION['error'] = "Age should be a positive number";
        }
    } else {
        $_SESSION['error'] = "All fields are required";
    }
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>
    <?php
    // session_start();

    if (isset($_SESSION['error'])) {
        echo "<script>alert('" . $_SESSION['error'] . "');</script>";
        unset($_SESSION['error']);
    }
    ?>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >
        <br>
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" >
        <br>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
