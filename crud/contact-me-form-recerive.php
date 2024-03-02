<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["messege"];
$sub = $_POST["subject"];


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

 $sql = "INSERT INTO contact_me(name,email,subject,messege) VALUES ('{$name}','{$email}','{$sub}','{$message}')";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            font-family: Arial, sans-serif;
        }

        .card {
            width: 300px;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            border-radius: 5px;
            background: linear-gradient(to right, #a18cd1, #fbc2eb);
            text-align: center;
            animation: fade-in 1s ease-in-out;
            transition: background-color 0.3s ease-in-out;
           
        }

        .message {
            color: magenta;
            font-size: 16px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: bold;
            /* Add font color */
         
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <p class="message">Thank you for your message!</p>
    </div>
</body>
</html>



<?php

header("Refresh: 5; URL=http://localhost/my portfolio website 2/index.php");



mysqli_close($conn);

?>
