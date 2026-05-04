<!DOCTYPE html> 

<html lang="en"> 

<head> 

    <meta charset="UTF-8"> 

    <title>Measure Conversion Chart - Lengths (UK)</title> 

    <link rel="stylesheet" href="style.css"> 

</head> 

<body> 

 

<h1>MEASURE CONVERSION CHART - LENGTHS (UK)</h1> 

 

<?php 

$met = [ 

    ["1 centimetre", "=", (1 * 10) . " millimetres", "1 cm", "=", (1 * 10) . " mm"], 

    ["1 decimetre", "=", (1 * 10) . " centimetres", "1 dm", "=", (1 * 10) . " cm"], 

    ["1 metre", "=", (1 * 100) . " centimetres", "1 m", "=", (1 * 100) . " cm"], 

    ["1 kilometre", "=", (1 * 1000) . " metres", "1 km", "=", (1 * 1000) . " m"] 

]; 

 

$imp = [ 

    ["1 foot", "=", (1 * 12) . " inches", "1 ft", "=", (1 * 12) . " in"], 

    ["1 yard", "=", (1 * 3) . " feet", "1 yd", "=", (1 * 3) . " ft"], 

    ["1 chain", "=", (1 * 22) . " yards", "1 ch", "=", (1 * 22) . " yd"], 

    ["1 furlong", "=", (1 * 220) . " yards", "1 fur", "=", (1 * 220) . " yd (or 10 ch)"], 

    ["1 mile", "=", (1 * 1760) . " yards", "1 mi", "=", (1 * 1760) . " yd (or 8 fur)"] 

]; 

 

$metricToImp = [ 

    ["1 millimetre", "=", (1 * 0.03937) . " inches", "1 mm", "=", (1 * 0.03937) . " in"], 

    ["1 centimetre", "=", (1 * 0.39370) . " inches", "1 cm", "=", (1 * 0.39370) . " in"], 

    ["1 metre", "=", (1 * 39.37008) . " inches", "1 m", "=", (1 * 39.37008) . " in"], 

    ["1 metre", "=", (1 * 3.28084) . " feet", "1 m", "=", (1 * 3.28084) . " ft"], 

    ["1 metre", "=", (1 * 1.09361) . " yards", "1 m", "=", (1 * 1.09361) . " yd"], 

    ["1 kilometre", "=", (1 * 1093.6133) . " yards", "1 km", "=", (1 * 1093.6133) . " yd"], 

    ["1 kilometre", "=", (1 * 0.62137) . " miles", "1 km", "=", (1 * 0.62137) . " mi"] 

]; 

 

$impToMetric = [ 

    ["1 inch", "=", (1 * 2.54) . " centimetres", "1 in", "=", (1 * 2.54) . " cm"], 

    ["1 foot", "=", (1 * 30.48) . " centimetres", "1 ft", "=", (1 * 30.48) . " cm"], 

    ["1 yard", "=", (1 * 91.44) . " centimetres", "1 yd", "=", (1 * 91.44) . " cm"], 

    ["1 yard", "=", (1 * 0.9144) . " metres", "1 yd", "=", (1 * 0.9144) . " m"], 

    ["1 mile", "=", (1 * 1609.344) . " metres", "1 mi", "=", (1 * 1609.344) . " m"], 

    ["1 mile", "=", (1 * 1.609344) . " kilometres", "1 mi", "=", (1 * 1.609344) . " km"] 

]; 

 

 


echo "<table>"; 

echo "<tr><th colspan='6' class='section-title'>METRIC CONVERSIONS</th></tr>"; 

 

foreach ($met as $row) { 

    echo "<tr>"; 

    foreach ($row as $col) { 

        echo "<td>" . $col . "</td>"; 

    } 

    echo "</tr>"; 

} 

echo "</table><br>"; 


echo "<table>"; 

echo "<tr><th colspan='6' class='section-title'>IMPERIAL CONVERSIONS</th></tr>"; 

 

foreach ($imp as $row) { 

    echo "<tr>"; 

    foreach ($row as $col) { 

        echo "<td>" . $col . "</td>"; 

    } 

    echo "</tr>"; 

} 

echo "</table><br>"; 

echo "<table>"; 

echo "<tr><th colspan='6' class='section-title'>METRIC -> IMPERIAL CONVERSIONS</th></tr>"; 

 

foreach ($metricToImp as $row) { 

    echo "<tr>"; 

    foreach ($row as $col) { 

        echo "<td>" . $col . "</td>"; 

    } 

    echo "</tr>"; 

} 

echo "</table><br>"; 


echo "<table>"; 

echo "<tr><th colspan='6' class='section-title'>IMPERIAL -> METRIC CONVERSIONS</th></tr>"; 

foreach ($impToMetric as $row) { 

    echo "<tr>"; 

    foreach ($row as $col) { 

        echo "<td>" . $col . "</td>"; 

    } 

    echo "</tr>"; 

} 

echo "</table><br>"; 

 

?> 

 

</body> 

</html> 

 

 