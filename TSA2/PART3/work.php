<?php
$workExp = [
    'Work Immersion – IT Department',
    'Performed basic troubleshooting and technical tasks',
    'Assisted in simple programming and system tasks'
];
?>

<h3>Work Experience</h3>

<ul>
    <?php
    foreach ($workExp as $work) {
        echo "<li>$work</li>";
    }
    ?>
</ul>
