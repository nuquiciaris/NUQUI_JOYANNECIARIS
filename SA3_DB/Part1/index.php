<?php 
 
if(isset($_POST["submit"]) && $_POST["password"] == $_POST["confirm"]){ 
    setcookie("username", $_POST["username"], time() + 3600); 
} 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Registration Form</title> 
 
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
 
input{ 
    width:100%; 
    padding:10px; 
    border:1px solid violet; 
    border-radius:6px; 
    font-size:15px; 
} 
 
input[type="submit"]{ 
    margin-top:20px; 
    background:deeppink; 
    color:white; 
    border:none; 
    cursor:pointer; 
    font-size:16px; 
    font-weight:bold; 
} 
 
input[type="submit"]:hover{ 
    background:purple; 
} 
 
.result{ 
    width:450px; 
    margin:25px auto; 
    background:white; 
    border:2px solid purple; 
    border-radius:12px; 
    padding:20px; 
    box-shadow:0 5px 15px rgba(0,0,0,.2); 
} 
 
.result h3{ 
    text-align:center; 
    color:purple; 
    margin-bottom:15px; 
} 
 
.result p{ 
    margin:8px 0; 
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
 
<h2>My Personal Information</h2> 
 
<form method="POST" action=""> 
 
<label>First Name</label> 
<input type="text" name="fname" required> 
 
<label>Middle Name</label> 
<input type="text" name="mname" required> 
 
<label>Last Name</label> 
<input type="text" name="lname" required> 
 
<label>Username</label> 
<input type="text" name="username" required> 
 
<label>Password</label> 
<input type="password" name="password" required> 
 
<label>Confirm Password</label> 
<input type="password" name="confirm" required> 
 
<label>Birthday</label> 
<input type="text" name="birthday" placeholder="January 30, 1993" required> 
 
<label>Email</label> 
<input type="email" name="email" required> 
 
<label>Contact Number</label> 
<input type="text" name="contact" required> 
 
<input type="submit" name="submit" value="Submit"> 
 
</form> 
 
</div> 
 
<?php 
 
if(isset($_POST["submit"])){ 
 
    if($_POST["password"] == $_POST["confirm"]){ 
 
        echo "<div class='result'>"; 
        echo "<h3>Registration Details</h3>"; 
 
        echo "<p><strong>First Name:</strong> ".$_POST["fname"]."</p>"; 
        echo "<p><strong>Middle Name:</strong> ".$_POST["mname"]."</p>"; 
        echo "<p><strong>Last Name:</strong> ".$_POST["lname"]."</p>"; 
        echo "<p><strong>Username:</strong> ".$_POST["username"]."</p>"; 
        echo "<p><strong>Password:</strong> ".$_POST["password"]."</p>"; 
        echo "<p><strong>Birthday:</strong> ".$_POST["birthday"]."</p>"; 
        echo "<p><strong>Email:</strong> ".$_POST["email"]."</p>"; 
        echo "<p><strong>Contact Number:</strong> ".$_POST["contact"]."</p>"; 
 
        if(isset($_COOKIE["username"])){ 
            echo "<hr>"; 
            echo "<p><strong>Cookie Username:</strong> ".$_COOKIE["username"]."</p>"; 
        }else{ 
            echo "<hr>"; 
            echo "<p><strong>Cookie Username:</strong> ".$_POST["username"]."</p>"; 
        } 
 
        echo "</div>"; 
 
    }else{ 
 
        echo "<div class='error'>"; 
        echo "Password and Confirm Password are not the same."; 
        echo "</div>"; 
 
    } 
 
} 
 
?> 
 
</body> 
</html> 

