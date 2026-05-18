<!-- Using ARRAYS, create a program using PHP that will contain 10 different numbers
 and get the sum, difference, product and quotient
 of all values in the array.   -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Array List</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Array Operations</h2>

<?php


$numList = array(199, 200, 201, 202, 203, 204, 205, 206, 207, 208);

$totalSum = array_sum($numList);

$totalDifference = $numList[0];
for($i = 1; $i < count($numList); $i++){
   $totalDifference -= $numList[$i];
}

$totalProduct = 1;
foreach($numList as $value){
   $totalProduct *= $value;
}

$totalQuotient = $numList[0];
for($i = 1; $i < count($numList); $i++){
   if($numList[$i] != 0){
      $totalQuotient /= $numList[$i];
   }
}


echo "<table>";

echo "<tr>";
echo "<th colspan='2'>Array list: " . implode(", ", $numList) . "</th>";
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

?>

</body>
</html>