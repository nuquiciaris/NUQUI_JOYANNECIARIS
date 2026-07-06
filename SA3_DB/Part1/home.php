<?php

session_start();


if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home - Dashboard</title>

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

.welcome-msg {
    font-size: 18px;
    color: #333;
    margin-bottom: 15px;
    text-align: center;
}

.welcome-msg span {
    color: deeppink;
    font-weight: bold;
}

.info-box {
    background: #fff5ff;
    border: 1px solid violet;
    border-radius: 6px;
    padding: 15px;
    margin-bottom: 20px;
}

.info-box p {
    margin: 8px 0;
    color: purple;
}

.logout-btn { 
    display: block;
    text-align: center;
    width: 100%;
    padding: 10px;
    background: deeppink; 
    color: white; 
    border: none; 
    border-radius: 6px;
    cursor: pointer; 
    font-size: 16px; 
    font-weight: bold; 
    text-decoration: none;
} 
 
.logout-btn:hover{ 
    background: purple; 
} 

.footer-credit {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: green;
    font-weight: bold;
}
</style>

</head>
<body>

<div class="container">

<h2>User Dashboard</h2>

<div class="welcome-msg">
    Welcome, <span><?php echo htmlspecialchars($_SESSION['name']); ?></span>!
</div>

<div class="info-box">
    <p><strong>Username:</strong> <?php echo htmlspecialchars($_COOKIE['username'] ?? 'user123'); ?></p>
    <p><strong>Email Address:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <p><strong>Session Status:</strong> Active</p>
</div>

<a href="logout.php" class="logout-btn">Logout</a>

<div class="footer-credit">© Joy Anne Ciaris B. Nuqui</div>

</div>

</body>
</html>

