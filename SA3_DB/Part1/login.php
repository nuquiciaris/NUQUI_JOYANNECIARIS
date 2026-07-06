<?php

session_start();


$static_username = "user123";
$static_password = "password123";


if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: home.php");
    exit();
}

$error_msg = "";


if (isset($_POST['submit'])) {
    $input_user = trim($_POST['username']);
    $input_pass = trim($_POST['password']);

 
    if ($input_user === $static_username && $input_pass === $static_password) {
        

        if (isset($_POST['remember'])) {
            // Save username and password in cookies for 1 day
            setcookie("username", $input_user, time() + (86400 * 1), "/");
            setcookie("password", $input_pass, time() + (86400 * 1), "/");
        } else {
           
            setcookie("username", "", time() - 3600, "/");
            setcookie("password", "", time() - 3600, "/");
        }

    
        $_SESSION['logged'] = true;
        $_SESSION['name'] = "Joy Anne Ciaris B. Nuqui";
        $_SESSION['email'] = "user123@gmail.com";


        header("Location: home.php");
        exit();
    } else {
        $error_msg = "Invalid username or password.";
    }
}

$saved_username = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
$saved_password = isset($_COOKIE['password']) ? $_COOKIE['password'] : "";
$is_remembered = isset($_COOKIE['username']) ? "checked" : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>

<style>
*{ 
    margin:0; 
    padding:0; 
    box-sizing:border-box; 
    font-family:Arial, Helvetica, sans-serif; 
} 
 
body{ 
    background:#f8d7ff; 
    padding:40px; 
} 
 
.container{ 
    width:450px; 
    margin:auto; 
    background:#ffffff; 
    border:2px solid purple; 
    border-radius:12px; 
    padding:25px; 
    box-shadow:0 5px 15px rgba(0,0,0,.2); 
} 
 
h2{ 
    text-align:center; 
    color:purple; 
    margin-bottom:20px; 
} 
 
label{ 
    display:block; 
    margin-top:12px; 
    margin-bottom:5px; 
    color:purple; 
    font-weight:bold; 
} 
 
input[type="text"], input[type="password"]{ 
    width:100%; 
    padding:10px; 
    border:1px solid violet; 
    border-radius:6px; 
    font-size:15px; 
} 

.remember-box {
    margin-top: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.remember-box label {
    display: inline;
    margin: 0;
}

.remember-box input[type="checkbox"] {
    width: auto;
    cursor: pointer;
}
 
input[type="submit"]{ 
    margin-top: 20px; 
    width: 100%;
    padding: 10px;
    background:deeppink; 
    color:white; 
    border:none; 
    border-radius:6px;
    cursor:pointer; 
    font-size:16px; 
    font-weight:bold; 
} 
 
input[type="submit"]:hover{ 
    background:purple; 
} 

.footer-credit {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: green;
    font-weight: bold;
}
 
.error{ 
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
</style>

</head>
<body>

<div class="container">

<h2>Log-In Form</h2>

<form method="POST" action="">

<label>Username</label>
<input type="text" name="username" value="<?php echo htmlspecialchars($saved_username); ?>" required>

<label>Password</label>
<input type="password" name="password" value="<?php echo htmlspecialchars($saved_password); ?>" required>

<div class="remember-box">
    <input type="checkbox" name="remember" id="remember" <?php echo $is_remembered; ?>>
    <label for="remember">Remember Me</label>
</div>

<input type="submit" name="submit" value="Submit">

</form>

<div class="footer-credit">© Ciaris Nuqui</div>

</div>

<?php 
if(!empty($error_msg)){ 
    echo "<div class='error'>"; 
    echo htmlspecialchars($error_msg); 
    echo "</div>"; 
} 
?>

</body>
</html>

