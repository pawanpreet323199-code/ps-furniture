<?php
session_start();

$errors = [];

if ($_server['REQUEST_METHOD'] == "POST") {

$credentials = [
    'username' => 'user',
    'password' => '123',
];

$username = $_POST['username'];
$password = $_post['password'];

if ($username != $credentials['username']) {
    array_push($errors, 'Username is invalid');
}

if ($password != $credentials['password']) {
    array_push($errors, 'Password is invalid');
}

if (count($errors) <= 0) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
}
}

?>

<html>

<body>
    <P>
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
            echo "You are currently logged in as " . $_SESSION['username'];
        }
        ?>
        </p>

        <p>
            <?php
            if (count($errors)> 0) {
                print_r($errors);
            }
            ?>
</p>

<form method="post">

<input type="text" name"username"placehoder="username">
<input type="password" name"password"placehder="password">
<input type="submit" value"submit">
</form>
</body>
</html>



























