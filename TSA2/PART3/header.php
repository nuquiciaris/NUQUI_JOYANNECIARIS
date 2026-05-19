<?php
$name = "Joy Anne Ciaris B. Nuqui";
$age = 19;
$location = "Marilao, Bulacan";
$birthday = "June 28, 2006";
$email = "jbnuqui@fit.edu.ph";
$phone = "+63-917-738-4927";
?>

<img src="pic.jpg" class="sideImg">

<div class="profile">
    <h2>Personal Information</h2>
    <hr>
    <p>
        Name: <?php echo $name; ?><br>
        Age: <?php echo $age; ?><br>
        Location: <?php echo $location; ?><br>
        Birthday: <?php echo $birthday; ?>
    </p>
</div>

<div class="contacts">
    <h2>Contacts</h2>
    <hr>
    <p>
        Email: <?php echo $email; ?><br>
        Phone: <?php echo $phone; ?>
    </p>
</div>