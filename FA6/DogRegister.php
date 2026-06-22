<?php
require_once 'db.php';

$message = "";

if (isset($_POST['submit'])) {
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $breed   = htmlspecialchars(trim($_POST['breed'] ?? ''));
    $age     = htmlspecialchars(trim($_POST['age'] ?? ''));
    $address = htmlspecialchars(trim($_POST['address'] ?? ''));
    $color   = htmlspecialchars(trim($_POST['color'] ?? ''));
    $height  = htmlspecialchars(trim($_POST['height'] ?? ''));
    $weight  = htmlspecialchars(trim($_POST['weight'] ?? ''));

    if (!empty($name)) {
        try {
            $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight) 
                    VALUES (:name, :breed, :age, :address, :color, :height, :weight)";
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':name'    => $name,
                ':breed'   => $breed,
                ':age'     => $age,
                ':address' => $address,
                ':color'   => $color,
                ':height'  => $height,
                ':weight'  => $weight
            ]);
            
            // Set temporary verification cookie
            setcookie("last_saved_dog", $name, time() + 30, "/");
            
            // Fixed redirect target
            header("Location: DogView.php");
            exit;
        } catch (PDOException $e) {
            $message = '<div class="alert alert-danger">Error saving data: ' . $e->getMessage() . '</div>';
        }
    } else {
        $message = '<div class="alert alert-warning">The Name field is required!</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dog Information Form</title>
</head>
<body class="bg-light">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col col-md-5 bg-white p-4 rounded shadow-sm">
                <h5 class="mb-3 text-secondary">Dog Information</h5>
                
                <?= $message; ?>

                <form action="DogRegister.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label font-monospace small">Name</label>
                        <input type="text" class="form-control form-control-sm" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="breed" class="form-label font-monospace small">Breed</label>
                        <input type="text" class="form-control form-control-sm" name="breed" id="breed">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label font-monospace small">Age</label>
                        <input type="text" class="form-control form-control-sm" name="age" id="age">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label font-monospace small">Address</label>
                        <input type="text" class="form-control form-control-sm" name="address" id="address">
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label font-monospace small">Color</label>
                        <input type="text" class="form-control form-control-sm" name="color" id="color">
                    </div>
                    <div class="mb-3">
                        <label for="height" class="form-label font-monospace small">Height</label>
                        <input type="text" class="form-control form-control-sm" name="height" id="height">
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label font-monospace small">Weight</label>
                        <input type="text" class="form-control form-control-sm" name="weight" id="weight">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-light border w-100 btn-sm text-lowercase shadow-sm">Save</button>
                    </div>
                </form>
                <div class="text-muted small mt-2">© Ciaris Nuqui</div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>