<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Student Registration Form</h2>

    <form method="POST">

        <label>First Name</label>
        <input type="text" name="fname" required>

        <label>Middle Name</label>
        <input type="text" name="mname">

        <label>Last Name</label>
        <input type="text" name="lname" required>

        <label>Age</label>
        <input type="number" name="age" required>

        <label>Gender</label>
        <select name="gender">
            <option>Male</option>
            <option>Female</option>
        </select>

        <label>Course</label>
        <input type="text" name="course" required>

        <input type="submit" name="submit" value="Register" class="btn">

    </form>

<?php

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    $fullname = strtoupper($fname . " " . $mname . " " . $lname);

    echo "<div class='output'>";
    echo "<h3>Student Information</h3>";
    echo "Full Name: " . $fullname . "<br>";
    echo "Age: " . number_format($age) . "<br>";
    echo "Gender: " . ucfirst($gender) . "<br>";
    echo "Course: " . strtoupper($course) . "<br>";
    echo "</div>";
}

?>

</div>

</body>
</html>