<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$fruits = array(
    array("image"=>"apple.jpg","name"=>"Apple","desc"=>"Color Red","facts"=>"Apples are rich in fiber and help improve digestion."),
    array("image"=>"banana.jpg","name"=>"Banana","desc"=>"Color Yellow","facts"=>"Bananas are a healthful addition to a balanced diet and provide a good source of fiber."),
    array("image"=>"blueberry.jpg","name"=>"Blueberry","desc"=>"Color Blue","facts"=>"Blueberries are rich in antioxidants."),
    array("image"=>"dragonfruit.jpg","name"=>"Dragonfruit","desc"=>"Color Pink","facts"=>"Dragonfruit helps improve digestion."),
    array("image"=>"guava.jpg","name"=>"Guava","desc"=>"Color Green","facts"=>"Guava boosts immunity and is rich in vitamin C."),
    array("image"=>"mango.jpg","name"=>"Mango","desc"=>"Color Yellow","facts"=>"Mangoes are rich in vitamins and improve immunity."),
    array("image"=>"orange.jpg","name"=>"Orange","desc"=>"Color Orange","facts"=>"Oranges are high in vitamin C."),
    array("image"=>"pineapple.jpg","name"=>"Pineapple","desc"=>"Color Yellow","facts"=>"Pineapple contains enzymes that aid digestion."),
    array("image"=>"strawberry.jpg","name"=>"Strawberry","desc"=>"Color Red","facts"=>"Strawberries are rich in antioxidants."),
    array("image"=>"watermelon.jpg","name"=>"Watermelon","desc"=>"Color Green/Red","facts"=>"Watermelon helps keep the body hydrated.")
);


usort($fruits, function($a, $b){
    return strcmp($a['name'], $b['name']);
});


echo "<table>";

echo "<tr><th colspan='4' class='title-row'>My Fruits</th></tr>";

echo "<tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
      </tr>";

foreach($fruits as $fruit){
    echo "<tr>";
    echo "<td><img src='".$fruit['image']."' class='fruit-img' alt='".$fruit['name']."'></td>";
    echo "<td>".$fruit['name']."</td>";
    echo "<td>".$fruit['desc']."</td>";
    echo "<td>".$fruit['facts']."</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>
