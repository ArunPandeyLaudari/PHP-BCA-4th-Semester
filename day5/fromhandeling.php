<?php
if (isset($_POST['submit'])) {

    $email = ($_POST['email']);
    $password = ($_POST['password']);

    if ($email == "" || $password == "") {
        echo "Email or password is not valid.";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit();
    }

    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters.";
        exit();
    }

    echo "Email: " . $email . '<br>';
    echo "Password: " . $password;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>

<body>
    <form action="" method="post">
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>