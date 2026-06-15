<?php
$fName = $MI = $lastName = $dob = $address = "";

if(isset($_GET['submit'])) {
    $fName = $_GET['name'];
    $MI = $_GET['MI'];
    $lastName = $_GET['lastName'];
    $dob = $_GET['dob'];
    $address = $_GET['address'];
    $_POST = $_GET;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Information Webpage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f3e8ff; }
        .info {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .btn-primary {
            background-color: #7c3aed;
            border: none;
        }
        h6 { 
            color: #7c3aed;
         }
    </style>
</head>

<body>
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="info p-4">

                <form method="get">

                    <div class="mb-2">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="mb-2">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="MI">
                    </div>

                    <div class="mb-2">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastName">
                    </div>

                    <div class="mb-2">
                        <label>Date of Birth</label>
                        <input type="text" class="form-control" name="dob">
                    </div>

                    <div class="mb-2">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary w-100">
                        Submit
                    </button>

                </form>

                <?php if(isset($_POST['submit'])): ?>
                    <div class="mt-3">
                        <h6>Data Received</h6>
                        <hr>

                        <p>First Name: <?= $fName ?></p>
                        <p>Middle Name: <?= $MI ?></p>
                        <p>Last Name: <?= $lastName ?></p>
                        <p>Date of Birth: <?= $dob ?></p>
                        <p>Address: <?= $address ?></p>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </div>
</div>
</body>
</html>