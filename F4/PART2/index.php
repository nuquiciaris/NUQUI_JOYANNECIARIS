<!DOCTYPE html>
<html>
<head>
    <title>String Function</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>List of Names</h2>

<?php

$names = array(
    "ciaris", "jen", "hannah", "kurt", "mariyel",
    "kc", "mark adrian", "aaron", "abby", "prim",
    "avrielle", "julina", "khinsel", "nelia", "kyla",
    "zyon", "she anne", "ella mae", "jace", "jax"
);

echo "<table>";
echo "<tr>";
echo "<th colspan='6'>List of Names</th>";
echo "</tr>";

echo "<tr>";
echo "<th>Name</th>";
echo "<th>Number of characters</th>";
echo "<th>Uppercase first character</th>";
echo "<th>Replace vowels with @</th>";
echo "<th>Position of 'a'</th>";
echo "<th>Reverse name</th>";
echo "</tr>";

foreach($names as $name){

    $length = strlen($name);
    $upper = ucfirst($name);
    $replace = str_ireplace(array('a','e','i','o','u'), '@', $name);

    $position = strpos($name, 'a');
    if($position === false){
        $position = "Not found";
    }

    $reverse = strrev($name);

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$length</td>";
    echo "<td>$upper</td>";
    echo "<td>$replace</td>";
    echo "<td>$position</td>";
    echo "<td>$reverse</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>
