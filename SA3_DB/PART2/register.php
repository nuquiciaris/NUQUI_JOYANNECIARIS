<?php
if(isset($_POST["submit"]) && $_POST["password"] == $_POST["confirm"]){
    setcookie("username", $_POST["username"], time() + 3600);
}


include("db.php");


$message = "";
$messageType = "";


function clean($data) {
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}


if($_SERVER["REQUEST_METHOD"] == "POST") {


    if(isset($_POST["submit"])) {


        $username = clean($_POST['username']);
        $password = clean($_POST['password']);
        $confirmPass = clean($_POST['confirm']);
       
        $fname = clean($_POST['fname']);
        $mname = clean($_POST['mname']);
        $lname = clean($_POST['lname']);
        $birthday = clean($_POST['birthday']);
        $email = clean($_POST['email']);
        $contact = clean($_POST['contact']);


        if($password != $confirmPass) {
            $message = "Password and Confirm Password are not the same.";
            $messageType = "error";
        }
        elseif(empty($username) || empty($password)) {
            $message = "Username and Password are required.";
            $messageType = "error";
        }
        else {
            $checkUsername = "SELECT * FROM accounts WHERE username = '$username' ";
            $result = mysqli_query($connection, $checkUsername);


            if(mysqli_num_rows($result) > 0 ) {
                $message = "Username already exists.";
                $messageType = "error";
            }
            else {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
               
                       $insertValues = "INSERT INTO accounts (username, password, firstname, middlename, lastname, birthday, email, contact_num)
                                 VALUES ('$username', '$passwordHash', '$fname', '$mname', '$lname', '$birthday', '$email', '$contact')";


                if(mysqli_query($connection, $insertValues)) {
                    $message = "Account successfully created.";
                    $messageType = "result";
                }
                else {
                    $message = "Account registration failed.";
                    $messageType = "error";
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
    <title>Registration Form</title>
    <style>
    * { margin:0; padding:0; box-sizing:border-box; font-family:Arial, sans-serif; }
    body { background:#f8d7ff; padding:40px; }
    .container { width:450px; margin:auto; background:#ffffff; border:2px solid purple; border-radius:12px; padding:25px; box-shadow:0 5px 15px rgba(0,0,0,.2); }
    h2 { text-align:center; color:purple; margin-bottom:20px; }
    label { display:block; margin-top:12px; margin-bottom:5px; color:purple; font-weight:bold; }
    input { width:100%; padding:10px; border:1px solid violet; border-radius:6px; font-size:15px; }
    input[type="submit"] { margin-top:20px; background:deeppink; color:white; border:none; cursor:pointer; font-size:16px; font-weight:bold; }
    input[type="submit"]:hover { background:purple; }
    .result { width:450px; margin:25px auto; background:white; border:2px solid purple; border-radius:12px; padding:15px; text-align:center; font-weight:bold; color: green; box-shadow:0 5px 15px rgba(0,0,0,.2); }
    .error { width:450px; margin:25px auto; background:#ffd6e7; color:red; border:2px solid red; border-radius:10px; padding:15px; text-align:center; font-weight:bold; }
    .login-link { text-align: center; margin-top: 15px; }
    .login-link a { color: purple; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>


<div class="container">
    <h2>My Personal Information</h2>
    <form method="POST" action="">
        <label>First Name</label>
        <input type="text" name="fname" value="<?php echo isset($_POST['fname']) ? htmlspecialchars($_POST['fname']) : ''; ?>" required>
       
        <label>Middle Name</label>
        <input type="text" name="mname" value="<?php echo isset($_POST['mname']) ? htmlspecialchars($_POST['mname']) : ''; ?>" required>
       
        <label>Last Name</label>
        <input type="text" name="lname" value="<?php echo isset($_POST['lname']) ? htmlspecialchars($_POST['lname']) : ''; ?>" required>
       
        <label>Username</label>
        <input type="text" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>
       
        <label>Password</label>
        <input type="password" name="password" required>
       
        <label>Confirm Password</label>
        <input type="password" name="confirm" required>
       
        <label>Birthday</label>
        <input type="text" name="birthday" placeholder="January 30, 1993" value="<?php echo isset($_POST['birthday']) ? htmlspecialchars($_POST['birthday']) : ''; ?>" required>
       
        <label>Email</label>
        <input type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
       
        <label>Contact Number</label>
        <input type="text" name="contact" value="<?php echo isset($_POST['contact']) ? htmlspecialchars($_POST['contact']) : ''; ?>" required>
       
        <input type="submit" name="submit" value="Submit">
    </form>
    <div class="login-link">
        <a href="login.php">Have an account? Log In</a>
    </div>
</div>


<?php
if(!empty($message)) {
    echo "<div class='" . ($messageType == "result" ? "result" : "error") . "'>$message</div>";
}
?>
</body>
</html>

