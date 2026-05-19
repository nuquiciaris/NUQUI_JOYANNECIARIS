<?php
$affiliation = [
    'ITAM Program Participant - Design Thinking',
    'Student Member - FEU Tech Organization'
];
?>

<h3>Affiliation</h3>

<ul>
    <?php
    foreach ($affiliation as $aff) {
        echo "<li>$aff</li>";
    }
    ?>
</ul>
