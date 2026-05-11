<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>





<body>

<div class="container">

<h2>STUDENT REGISTRATION FORM</h2>

<?php

$firstName= "Joy Anne Ciaris";
$middleI  = "B.";
$lastName = "Nuqui";
$age = 20;
$gender   = "Female";
$nationality = "Filipino";
$address  = "Marilao, Bulacan";
$doB   = "2006-06-28";
$email = "jbnuqui@fit.edu.ph";
$phone = "09177990493";
$telephone = "02-8123-4567";
$emergencyContact = "09175589614";
$elementary = "St. Therese School Montessori Inc.";
$juniorHigh = "Jocelyn V. Cacas Montessori School Inc.";
$seniorHigh = "University of the East - Caloocan";
$college    = "FEU Institute of Technology";
$elementaryY = "2010 - 2017";
$juniorHighY = "2017 - 2022";
$seniorHighY = "2022 - 2024";
$collegeY    = "2024 - 2028";
?>

<form>


<div class="section">
<p class="title">Student Information</p>

<div class="form-row">
    <label>First Name</label>
    <input type="text" value="<?= $firstName?>">
</div>

<div class="form-row">
    <label>Middle Name</label>
    <input type="text" value="<?= $middleI?>">
</div>

<div class="form-row">
    <label>Last Name</label>
    <input type="text" value="<?= $lastName?>">
</div>

<div class="form-row">
    <label>Age</label>
    <input type="text" value="<?= $age?>">
</div>

<div class="form-row">
    <label>Date of Birth</label>
    <input type="date" value="<?= $doB?>">
</div>

<div class="form-row">
    <label>Gender</label>
    <input type="text" value="<?= $gender?>">
</div>

<div class="form-row">
    <label>Nationality</label>
    <input type="text" value="<?= $nationality?>">
</div>

<div class="form-row">
    <label>Address</label>
    <input type="text" value="<?= $address?>">
</div>

</div>


<div class="section">
<p class="title">Contact Information</p>

<div class="form-row">
    <label>Email</label>
    <input type="email" value="<?= $email ?>">
</div>

<div class="form-row">
    <label>Mobile Number</label>
    <input type="text" value="<?= $phone ?>">
</div>

<div class="form-row">
    <label>Telephone</label>
    <input type="text" value="<?= $telephone ?>">
</div>

<div class="form-row">
    <label>Emergency Contact</label>
    <input type="text" value="<?= $emergencyContact ?>">
</div>

</div>


<div class="section">
<p class="title">Educational Background</p>

<div class="form-row">
    <label>Elementary</label>
    <input type="text" value="<?= $elementary ?>">
</div>

<div class="form-row">
    <label>Year</label>
    <input type="text" value="<?= $elementaryY ?>">
</div>

<div class="form-row">
    <label>Junior High</label>
    <input type="text" value="<?= $juniorHigh ?>">
</div>

<div class="form-row">
    <label>Year</label>
    <input type="text" value="<?= $juniorHighY ?>">
</div>

<div class="form-row">
    <label>Senior High</label>
    <input type="text" value="<?= $seniorHigh ?>">
</div>

<div class="form-row">
    <label>Year</label>
    <input type="text" value="<?= $seniorHighY ?>">
</div>

<div class="form-row">
    <label>College</label>
    <input type="text" value="<?= $college ?>">
</div>

<div class="form-row">
    <label>Year</label>
    <input type="text" value="<?= $collegeY ?>">
</div>

</div>

</form>

</div>

</body>
</html>