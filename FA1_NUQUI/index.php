<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>My PHP Activities</title> 
    <link rel="stylesheet" href="style.css"> 

</head> 
<body> 
    <?php 
        $name = "Joy Anne Ciaris B. Nuqui"; 
        $phoneNumber= "+63-917-738-4927"; 
        $email= "jbnuqui@fit.edu.ph"; 
        $location= "Marilao, Bulacan"; 
        $age= 19; 
        $educs = [
           
            'Elementary: St. Therese School',
            'Junior High school: Jocelyn V. Cacas Montessori School Inc.',
            '2022 - 2024: Senior HighSchool: University of the East – Caloocan',
            '2024 - Current: College: FEU Tech Institute of Technology'
        ];
      $workExs = [
            'Work Immersion – IT Department: Hands-on experience in basic IT operations.',
            'ITAM – Design Thinking Candidate: Training in creative problem-solving and collaboration.',
            'Python Certification: Basic programming and problem-solving skills.',
            'JavaScript Certification: Fundamentals of web scripting and interactivity.',
            'HTML Certification: Structured and semantic web page creation.'
        ];
        $skills = [ 
             'Python - Programming, problem‑solving, and writing simple scripts.' 
            , 'JavaScript - Interactivity and dynamic behavior to web pages' 
            , 'PHP - Server‑side scripting and handling web form' 
            , 'HTML - Create structured and well‑organized web page content.' 
            , 'CSS - Style web pages and design clean, responsive layouts.']; 

            $kskills = [ 
            
                'Teamwork – Works well in collaborative environments.',
                'Communication – Expresses ideas clearly and effectively.',
                'Problem‑Solving – Finds solutions to challenges.',
                'Time Management – Manages time and tasks efficiently.',
                'Adaptability – Open to learning and change.'
            ]; 

    ?> 
       <div class="container">

            <div class="header"> 
                <h1><?php echo $name; ?></h1> 
                <hr> 
                <p>
                    Email: <?php echo $email; ?> |
                    Phone Number: <?php echo $phoneNumber; ?> |
                    Location: <?php echo $location; ?>
                </p> 
            </div> 
    
            <div class="mainLayout">

                <div class="leftSide">

                    <img src="profile.jpg" class="sideImg">

                    <div class="profile">
                        <h2>Profile</h2>
                        <hr>
                        <p>
                            Hello! My name is <?php echo $name; ?>,
                            <?php echo $age; ?> years old.
                            I am a student at FEU Institute of Technology,
                            currently pursuing Information Technology.
                        </p>
                    </div>

                    <div class="contacts">
                        <h2>Contacts</h2>
                        <hr>
                        <p>
                            Email: <?php echo $email; ?><br>
                            Phone: <?php echo $phoneNumber; ?>
                        </p>
                    </div>

            
                    <div class="kskills">
                        <h2>Key Skills</h2>
                        <hr>
                        <?php
                            echo '<ul>';
                            foreach ($kskills as $kskill) {
                                echo "<li>$kskill</li>";
                            }
                            echo '</ul>';
                        ?>
                    </div>

                </div>




                <div class="rightSide">

                            <div class="educs">
                                <h2>Education</h2>
                                <hr>
                                <?php
                                    echo '<ul>';
                                    foreach ($educs as $edduc) {
                                        echo "<li>$edduc</li>";
                                    }
                                    echo '</ul>';
                                ?>
                            </div>

                            <div class="skills">
                                <h2>Language Skills</h2>
                                <hr> 
                                <?php
                                    echo '<ul>';
                                    foreach ($skills as $skill) {
                                        echo "<li>$skill</li>";
                                    }
                                    echo '</ul>';
                                ?>
                            </div>

                            <div class="workEx">
                                <h2>Work Experience</h2>
                                <hr>
                                <?php
                                    echo '<ul>';
                                    foreach ($workExs as $workEx) {
                                        echo "<li>$workEx</li>";
                                    }
                                    echo '</ul>';
                                ?>
                            </div>

                        </div>

                    </div>

                </div>