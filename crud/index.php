<?php
include 'header.php';

// Start the session
session_start();



if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    // Redirect to login page or handle the situation accordingly
    header("location: login.php");
    exit(); // Make sure to exit after a header redirection
}

if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);

    // Redirect to the login page after logout
    header("location: login.php");
    exit(); // Make sure to exit after a header redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
</head>
<body>

    <div id="main-content">

        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>This is your welcome page.</p>

        <!-- Logout button -->
        <form action="" method="post">
            <button type="submit" name="logout">Log Out</button>
        </form>

    </div>
</body>
</html>
