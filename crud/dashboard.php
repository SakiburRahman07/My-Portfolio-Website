<?php
// Start the session
session_start();

    if(!isset($_SESSION['username']) and !isset($_SESSION['password'])){
        // header("location: login.php");

        echo '<script>
        window.history.back();
        </script>';
        /* <script>
        window.history.back();
        </script> */
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
</head>
<body>

    <?php

        if(isset($_POST['logout'])){
            unset($_SESSION['username']);
            unset($_SESSION['password']);

            echo '<script>
        window.history.back();
        </script>';
            //header("location: login.php");
        }

    ?>

    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>This is your welcome page.</p>

    <!-- Logout button -->
    <form action="" method="post">
        <button type="submit" name="logout" onclick="logout()">Log Out</button>
    </form>
</body>
</html>
