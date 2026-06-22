<?php
require_once 'db.php';

try {
    $stmt = $pdo->query("SELECT * FROM dogs ORDER BY id ASC");
    $dogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database query error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Received</title>
</head>
<body class="bg-white">
    <div class="container p-5">
        <div class="row justify-content-start mb-4">
            <div class="col-md-6">
                <a href="DogRegister.php" class="btn btn-outline-secondary btn-sm">← Back to Registry Form</a>
                
                <?php if (isset($_COOKIE['last_saved_dog'])): ?>
                    <div class="alert alert-success py-2 mt-3 small">
                        Just Saved: <strong><?= htmlspecialchars($_COOKIE['last_saved_dog']); ?></strong>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-6">
                <?php if (empty($dogs)): ?>
                    <p class="text-muted">No database entries currently found inside the dogs table.</p>
                <?php else: ?>
                    <?php $count = 1; ?>
                    <?php foreach ($dogs as $dog): ?>
                        <div class="border border-dark p-3 mb-3 bg-white mx-1" style="max-width: 450px;">
                            <p class="mb-1"><strong>Dog <?= $count++; ?></strong></p>
                            <p class="mb-1 text-capitalize">Name: <?= htmlspecialchars($dog['name'] ?? ''); ?></p>
                            <p class="mb-1">Breed: <?= htmlspecialchars($dog['breed'] ?? ''); ?></p>
                            <p class="mb-1">Age: <?= htmlspecialchars($dog['age'] ?? ''); ?></p>
                            <p class="mb-1">Address: <?= htmlspecialchars($dog['address'] ?? ''); ?></p>
                            <p class="mb-1 text-lowercase">Color: <?= htmlspecialchars($dog['color'] ?? ''); ?></p>
                            <p class="mb-1">Height: <?= htmlspecialchars($dog['height'] ?? ''); ?></p>
                            <p class="mb-1">Weight: <?= htmlspecialchars($dog['weight'] ?? ''); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>