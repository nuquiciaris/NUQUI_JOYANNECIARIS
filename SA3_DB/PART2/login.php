<?php
include("db.php");


$message = "";


function clean($data) {
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}


if($_SERVER["REQUEST_METHOD"] == "POST") {


    if(isset($_POST["Login"])) {


        $username = clean($_POST['username']);
        $password = clean($_POST['password']);




        if(empty($username) && empty($password)) {
            $message = "Username and Password are required.";
        }
        elseif(empty($username)) {
            $message = "Username is required.";
        }
        elseif(empty($password)) {
            $message = "Password is required.";
        }
        else {
            $checkUsername = "SELECT * FROM accounts WHERE username = '$username' ";
            $result = mysqli_query($connection, $checkUsername);




            if(mysqli_num_rows($result) == 0 ) {
                $message = "Username does not exist.";
            }
            else {
       
                $row = mysqli_fetch_assoc($result);


                if(password_verify($password, $row['password'])) {
                    $_SESSION['username'] = $row['username'];
                   
                    header("Location: home.php");
                    exit();
                }
                else {
                    $message = "Incorrect password.";
                }
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Form</title>


    <style>
    * {
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, Helvetica, sans-serif;
    }
     
    body {
        background:#f8d7ff;
        padding:40px;
    }
     
    .container {
        width:450px;
        margin:auto;
        background:#ffffff;
        border:2px solid purple;
        border-radius:12px;
        padding:25px;
        box-shadow:0 5px 15px rgba(0,0,0,.2);
    }
     
    h2 {
        text-align:center;
        color:purple;
        margin-bottom:20px;
    }
     
    label {
        display:block;
        margin-top:12px;
        margin-bottom:5px;
        color:purple;
        font-weight:bold;
    }
     
    input {
        width:100%;
        padding:10px;
        border:1px solid violet;
        border-radius:6px;
        font-size:15px;
    }
     
    input[type="submit"] {
        margin-top:20px;
        background:deeppink;
        color:white;
        border:none;
        cursor:pointer;
        font-size:16px;
        font-weight:bold;
    }
     
    input[type="submit"]:hover {
        background:purple;
    }
     
    .error {
        width:450px;
        margin:25px auto;
        background:#ffd6e7;
        color:red;
        border:2px solid red;
        border-radius:10px;
        padding:15px;
        text-align:center;
        font-weight:bold;
    }


    .register-link {
        text-align: center;
        margin-top: 15px;
    }


    .register-link a {
        color: purple;
        text-decoration: none;
        font-weight: bold;
    }
    </style>
</head>
<body>


<div class="container">
    <h2>Log In Form</h2>
   
    <form method="POST" action="">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>
       
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
       
        <input type="submit" name="Login" value="Login">
    </form>


    <div class="register-link">
        <a href="register.php">No account yet? Sign In</a>
    </div>
</div>


<?php


if(!empty($message)) {
    echo "<div class='error'>";
    echo $message;
    echo "</div>";
}




?>


</body>
</html>





