<!DOCTYPE html> 

<html lang="en"> 

<head> 

    <meta charset="UTF-8"> 

    <title>Two Digit Decimal Combination</title> 

    <link rel="stylesheet" href="style.css"> 

</head> 

<body> 

    <h2>Two Digit Decimal Combination :</h2> 

    <div class="numbers"> 

        <?php 

        $count = 0; 

        for ($i = 0; $i <= 99; $i++) { 

            if ($i < 10) { 

                echo "0" . $i . ", "; 

            } else { 

                echo $i . ", "; 

            } 

            $count++; 

            if ($count % 19 == 0) { 

                echo "<br>"; 

            } 

        } 

        ?> 

    </div> 

</body> 

</html> 

 