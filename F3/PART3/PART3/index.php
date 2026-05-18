<!DOCTYPE html>
<html>
<head>
   <title>Activity 3 - USER DEFINED FUNCTION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>User Defined Function</h2>

<?php

    function calculate($num1, $num2, $num3)
    {
    $totalSum = $num1 + $num2 + $num3;
    $totalDifference = $num1 - $num2 - $num3;
    $totalProduct = $num1 * $num2 * $num3;
    $totalQuotient = $num1 / $num2 / $num3;

    echo "<table>";

    
    echo "<tr>";
    echo "<th colspan='2'>Numbers: $num1, $num2, $num3</th>";
    echo "</tr>";

    
    echo "<tr>";
    echo "<td>Sum</td>";
    echo "<td>$totalSum</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Difference</td>";
    echo "<td>$totalDifference</td>";
    echo "</tr>";

    
    echo "<tr>";
    echo "<td>Product</td>";
    echo "<td>$totalProduct</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>Quotient</td>";
    echo "<td>$totalQuotient</td>";
    echo "</tr>";

    echo "</table>";
    }

    calculate(488, 345, 232);

?>

</body>
</html>