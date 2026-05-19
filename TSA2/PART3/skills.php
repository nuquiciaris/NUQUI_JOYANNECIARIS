<?php
$skills = [
    'HTML - Creating structured web pages',
    'CSS - Designing and styling layouts',
    'JavaScript - Adding interactivity',
    'PHP - Server-side scripting',
    'Python - Basic programming and problem-solving'
];
?>

<h3>Skills</h3>

<ul>
    <?php
    foreach ($skills as $skill) {
        echo "<li>$skill</li>";
    }
    ?>
</ul>