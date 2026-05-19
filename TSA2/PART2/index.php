<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<h2>Volume of Shapes</h2>

<?php

function cube($s) {
    return $s * $s * $s;
}

function prism($l, $w, $h) {
    return $l * $w * $h;
}

function cylinder($r, $h) {
    return 3.14 * $r * $r * $h;
}

function sphere($r) {
    return (4/3) * 3.14 * $r * $r * $r;
}

function pyramid($l, $w, $h) {
    return (1/3) * $l * $w * $h;
}

$s = 5;
$l = 8;
$w = 9;
$h = 7;
$r = 3;


echo "<table>";
echo "<tr><th colspan='3'>Volume of Shapes</th></tr>";
echo "<tr><th>Values</th><th>Formula</th><th>Answer</th></tr>";

echo "<tr>";
echo "<td>s = $s</td>";
echo "<td>v = s × s × s</td>";
echo "<td>" . cube($s) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>l=$l, w=$w, h=$h</td>";
echo "<td>v = l × w × h</td>";
echo "<td>" . prism($l, $w, $h) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>r=$r, h=$h</td>";
echo "<td>v = π × r × r × h</td>";
echo "<td>" . cylinder($r, $h) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>r=$r</td>";
echo "<td>v = (4/3) × π × r × r × r</td>";  
echo "<td>" . sphere($r) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>l=$l, w=$w, h=$h</td>";
echo "<td>v = (1/3) × l × w × h</td>";
echo "<td>" . pyramid($l, $w, $h) . "</td>";
echo "</tr>";

echo "</table>";

?>

</body>
</html>
