<?php
$education = [
    'Elementary: St. Therese School Montessori Inc. (2010 - 2017)',
    'Junior High: Jocelyn V. Cacas Montessori School Inc. (2017 - 2022)',
    'Senior High: University of the East - Caloocan (2022 - 2024)',
    'College: FEU Institute of Technology (2024 - Present)'
];
?>

<h3>Educational Attainment</h3>

<ul>
    <?php
    foreach ($education as $school) {
        echo "<li>$school</li>";
    }
    ?>
</ul>