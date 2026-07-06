<?php


include("db.php");


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}


$message = "";
$messageType = "";


function clean($data) {
    $data = stripslashes($data);
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}


$session_user = $_SESSION['username'];
$query = "SELECT * FROM accounts WHERE username = '$session_user'";
$user_result = mysqli_query($connection, $query);
$user_row = mysqli_fetch_assoc($user_result);




$fname    = htmlspecialchars($user_row['firstname']);
$mname    = htmlspecialchars($user_row['middlename']);
$lname    = htmlspecialchars($user_row['lastname']);
$birthday = htmlspecialchars($user_row['birthday']);
$email    = htmlspecialchars($user_row['email']);
$contact  = htmlspecialchars($user_row['contact_num']);


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST["ResetPassword"])) {


        $currentPass = clean($_POST['current_password']);
        $newPass     = clean($_POST['new_password']);
        $confirmPass = clean($_POST['confirm_password']);


        if (!password_verify($currentPass, $user_row['password'])) {
            $message = "Current password is not the same with the old password";
            $messageType = "error";
        }
        elseif ($newPass != $confirmPass) {
            $message = "New password and Re-Enter new password should be the same.";
            $messageType = "error";
        }
        else {
            $newPasswordHash = password_hash($newPass, PASSWORD_DEFAULT);
            $updateQuery = "UPDATE accounts SET password = '$newPasswordHash' WHERE username = '$session_user'";


            if (mysqli_query($connection, $updateQuery)) {
                $message = "Password successfully reset.";
                $messageType = "result";
            } else {
                $message = "Failed to update the password.";
                $messageType = "error";
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
    <title>User Information Form</title>
    <style>
    * { margin:0; padding:0; box-sizing:border-box; font-family:Arial, sans-serif; }
    body { background:#f8d7ff; padding:40px; }
    .container { width:500px; margin:auto; background:#ffffff; border:2px solid purple; border-radius:12px; padding:25px; box-shadow:0 5px 15px rgba(0,0,0,.2); }
    .header-area { position: relative; margin-bottom: 20px; }
    .logout-link { position: absolute; right: 0; top: 25px; color: #0066cc; text-decoration: underline; font-size: 15px; }
    h2 { color: #333333; font-size: 28px; margin-bottom: 10px; }
    .profile-info { font-size: 15px; line-height: 1.6; color: #111111; margin-bottom: 20px; }
    .contact-details { margin-left: 20px; margin-top: 2px; }
    hr { border: 0; border-top: 1px solid #dddddd; margin: 20px 0; }
    .section-title { text-transform: uppercase; font-size: 14px; color: #555555; margin-bottom: 15px; letter-spacing: 0.5px; }
    label { display:block; margin-top:12px; margin-bottom:5px; color: #333333; font-size: 15px; }
    input[type="password"] { width:100%; padding:8px 10px; border:1px solid #777777; border-radius:4px; font-size:15px; }
    input[type="submit"] { width: 100%; margin-top:25px; background: #e0e0e0; color: #222222; border: 1px solid #aaaaaa; padding: 10px; border-radius: 4px; cursor:pointer; font-size:15px; text-align: center; }
    input[type="submit"]:hover { background: #d4d4d4; }
    .footer-credit { text-align: center; margin-top: 25px; font-size: 14px; color: #555555; }
    .result { width:500px; margin:25px auto; background:white; border:2px solid purple; border-radius:12px; padding:15px; text-align:center; font-weight:bold; color: green; box-shadow:0 5px 15px rgba(0,0,0,.2); }
    .error { width:500px; margin:25px auto; background:#ffd6e7; color:red; border:2px solid red; border-radius:10px; padding:15px; text-align:center; font-weight:bold; }
    </style>
</head>
<body>


<div class="container">
    <div class="header-area">
        <h2>User Information Form</h2>
        <a href="Logout.php" class="logout-link">Log-out</a>
    </div>


    <div class="profile-info">
        <p><strong>Welcome</strong> <?php echo $fname . " " . $mname . " " . $lname; ?></p>
        <p><strong>Birthday:</strong> <?php echo $birthday; ?></p>
        <p><strong>Contact Details</strong></p>
        <div class="contact-details">
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Contact:</strong> <?php echo $contact; ?></p>
        </div>
    </div>


    <hr>
    <div class="section-title">Reset Password</div>


    <form method="POST" action="">
        <label for="current_password">Enter Current Password:</label>
        <input type="password" name="current_password" id="current_password" required>
       
        <label for="new_password">Enter New Password:</label>
        <input type="password" name="new_password" id="new_password" required>
       
        <label for="confirm_password">Re-Enter New Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
       
        <input type="submit" name="ResetPassword" value="Reset Password">
    </form>


    <div class="footer-credit">
        &copy; Crix Brix
    </div>
</div>


<?php
if(!empty($message)) {
    echo "<div class='" . ($messageType == "result" ? "result" : "error") . "'>$message</div>";
}
?>
</body>
</html>

