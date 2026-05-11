<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Multiplication Table</h1>

<table>

<?php
for($row = 0; $row <= 10; $row++){

    echo "<tr>";

    for($col = 0; $col <= 10; $col++){

 
        if($row == 0 || $col == 0){
            $value = 0;
        } else {
            $value = $row * $col;
        }


        if(($row + $col) % 2 == 0){
            $color = "purple";
        } else {
            $color = "pink";
        }

        echo "<td class='$color'>$value</td>";
    }

    echo "</tr>";
}
?>

</table>

</body>
</html>