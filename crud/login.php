<?php
    $count = 0;
    if(isset($_COOKIE['login_count'])) {
        // If the cookie exists, increment the count
        setcookie('login_count', $_COOKIE['login_count'] + 1, time() + 86400, "/"); // 86400 = 1 day
        $count = $_COOKIE['login_count'];
    } else {
        // If the cookie does not exist, create it and set the count to 1
        setcookie('login_count', 1, time() + 86400, "/"); // 86400 seconds = 1 day
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/My portfolio website 2/crud/css/login.css">
</head>

<body>

    <?php
        session_start(); //! Start the session at the beginning

        //! Checks if already logged in
        if(isset($_SESSION['username']) and isset($_SESSION['password'])){
            header("Location: index.php");
        }

        

        $message = '';

        if (isset($_POST['login'])) { //! Check if the login button is clicked
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Check for empty fields
            if(empty($username) || empty($password)) {
                die("All fields are required.");
            }
         
            // Establishing connection
            $connection = mysqli_connect('localhost:3307','root','','portfolio');

            if(!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }

            //! Fetch user data from the database
            $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
            $result = mysqli_query($connection, $query);

            if(mysqli_num_rows($result) > 0){
                // If user exists, set session variables and redirect to base.php
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header("Location: index.php");
            } else {
                // If user does not exist, show an error message
                $message = "Invalid username or password";
            }

            mysqli_close($connection);
        }
    ?>

    <div class="container">
        <h2 style="color:green;">ADMIN PANEL LOG IN</h2>

        <h4 style="color:red;">(Total Visits: <?php echo $count?>)</h4>

        <form action="" method="POST"> <!-- Removed 'login.php' from action attribute for simplicity -->
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login" value="Login">
        </form>

        <p id='msg'><?php echo $message?></p>
    </div>

</body>

</html>
