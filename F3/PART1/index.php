<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>People Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Profile Information</h2>

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
    </tr>

<?php
$people = array (
    "Tzuyu", "Jihyo", "Nayeon", "Jeongyeon", "Momo", "Sana",
    "Mina", "Dahyun", "Chaeyoung", "Taehyung"
);

$image = array (
    "Tzuyu" => "tzuyu.jpg",
    "Jihyo" => "jihyo.jpg",
    "Nayeon" => "OIP.jpg",
    "Jeongyeon" => "jeongyeon.jpg",
    "Momo" => "momo.jpg",
    "Sana" => "sana.jpg",
    "Mina" => "mina.jpg",
    "Dahyun" => "dahyun.jpg",
    "Chaeyoung" => "chaeyoung.jpg",
    "Taehyung" => "taehyung.jpg"
);

$age = array (
    "Tzuyu" => 26,
    "Jihyo" => 29,
    "Nayeon" => 30,
    "Jeongyeon" => 29,
    "Momo" => 29,
    "Sana" => 29,
    "Mina" => 29,
    "Dahyun" => 27,
    "Chaeyoung" => 27,
    "Taehyung" => 30
);

$birthday = array (
    "Tzuyu" => "June 14, 1999",
    "Jihyo" => "February 1, 1997",
    "Nayeon" => "September 22, 1995",
    "Jeongyeon" => "November 1, 1996",
    "Momo" => "November 9, 1996",
    "Sana" => "December 29, 1996",
    "Mina" => "March 24, 1997",
    "Dahyun" => "May 28, 1998",
    "Chaeyoung" => "April 23, 1999",
    "Taehyung" => "December 30, 1995"
);

$contact = array (
    "Tzuyu" => "09177990493",
    "Jihyo" => "09735498762",
    "Nayeon" => "09472837468",
    "Jeongyeon" => "09849076537",
    "Momo" => "09176489027",
    "Sana" => "09763789276",
    "Mina" => "09849076537",
    "Dahyun" => "0936789267839",
    "Chaeyoung" => "09748903756",
    "Taehyung" => "09567890476"
);


sort($people);

$no = 1;

foreach ($people as $name) {
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>$name</td>";
    echo "<td><img src='" . $image[$name] . "'></td>";
    echo "<td>" . $age[$name] . "</td>";
    echo "<td>" . $birthday[$name] . "</td>";
    echo "<td>" . $contact[$name] . "</td>";
    echo "</tr>";

    $no++;
}
?>

</table>

</body>
</html>