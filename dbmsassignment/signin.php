<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Registration or login logic here
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Example for login
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // User found
        echo "Login Successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>

<form method="POST" action="signin.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Sign In">
</form>
