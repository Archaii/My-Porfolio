<?php
    // Variables
    $fullName = 'KYLE ROBIN ANDAYA';
    $job = 'Web Developer';
    $phoneNumber = '+639567909423';
    $programmingLanguages = ['C++', 'Java', 'Python','PHP','HTML','CSS','Javascript'];
    $hardSkills = ['Programming Languages','Data Structures','Algorithms','Database Management','Web Development','Software Development Lifecycle','Operating Systems',
    'Networking','Computer Architecture','Security','Machine Learning and AI','Mobile Development','Software Testing','Cloud Computing','Parallel and Distributed Computing'];
    $softSkills = ['Problem Solving','Critical Thinking','Communication Skills','Teamwork','Time Management','Adaptability','Creativity',
    'Attention to Detail','Self-Motivation','Leadership','Empathy','Interpersonal Skills','Resilience','Project Management','Continuous Learning'];
    $profile = 'Enthusiastic and dedicated Computer Science student with a passion for technology and software development. 
    Seeking internship opportunities to apply theoretical knowledge in real-world projects, contribute to innovative solutions, 
    and further develop skills in programming, algorithms, and problem-solving.';
    $technicalCommittee = 'Nazareth School of National University | Nov 2018 - Nov 2019';
    $skkagawad = 'Barangay 405 | Dec 2023 - Present';
    $elementarySchool = 'National University | 2010 - 2016';
    $juniorHighSchool = 'Nazareth School of National University | 2016 - 2020';
    $stem ='Nazareth School of National University | 2020 - 2022';
    $college ='FEU Institute of Technology | 2022 - Present';
    $copyright = '© 2023, Andaya';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Portfolio</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" href="avatar.png" type="image/x-icon">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <div id="banner">
            <div id="persona">
                <h1><?php echo $fullName; ?></h1>
                <h2><?php echo $job ?></h2>
                <p id="information">
                <?php echo $phoneNumber ?><br>
                        <a href=mailto:“kylesemingandaya@gmail.com”>kylesemingandaya@gmail.com</a><br>
                        <a href="">www.kyleandaya.com</a>
                </p>
            </div>
            <div id="face">
                <img id="face-image" src="face.jpg" alt="face-image">
            </div>
            
        </div>

        <div id ="space"><br></div>
        
        <div id="info-sheet">
            <div id ="expertise">
                <h3>EXPERTISE</h3>
                <h4>Programming Languages</h4>
                <ul>
                    <?php foreach ($programmingLanguages as $language): ?>
                        <li><?php echo $language; ?></li>
                    <?php endforeach; ?>
                </ul>
                <h4>Hard Skills</h4>
                <ul>
                    <?php foreach ($hardSkills as $hard): ?>
                        <li><?php echo $hard; ?></li>
                    <?php endforeach; ?>
                </ul>
                <h4>Soft Skills</h4>
                <ul>
                <?php foreach ($softSkills as $soft): ?>
                        <li><?php echo $soft; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id ="experiences">
                <h3>PROFILE</h3>
                <p><?php echo $profile ?></p>
                <h3>EXPERIENCE</h3>
                <h4>TECHNICAL COMMITTEE</h4>
                <p class="p4"><?php echo $technicalCommittee; ?></p>
                <ul>
                    <li>managed the lightings, sounds, music and presentation of thbe moving-up ceremony of Grade 7 Students of NUNS</li>
                    <li>facilitated slideshows of various events including mass ceremonies, student activities, and awareness months in NUNS</li>
                </ul>
                <h4>SANGGUNIANG KABATAAN KAGAWAD</h4>
                <p class="p4"><?php echo $skkagawad; ?></p>
                <ul>
                    <li>Participated in the formulation and enactment of local ordinances, resolutions, and policies that address the needs and concerns of the youth in our barangay.</li>
                    <li>Introduced and proposed legislation related to youth welfare, development, and empowerment</li>
                    <li>Participated in the budgetary process by proposing programs, projects, and activities that promote the welfare and development of the youth sector.</li>
                </ul>
                <h3>EDUCATION</h3>
                <h4>Elementary School</h4>
                <p class="p4"><?php echo $elementarySchool; ?></p>
                <h4>Junior High School</h4>
                <p class="p4"><?php echo $juniorHighSchool; ?></p>
                <h4>Science, Technology, Engineering, and Mathematics Strand (STEM)</h4>
                <p class="p4"><?php echo $stem; ?></p>
                <h4>Bachelor's Degree in Computer Science</h4>
                <p class="p4"><?php echo $college; ?></p>

                <div id="footer">
                    <ul id="footer-links">
                        <li>
                            <i class="fa-brands fa-facebook"></i>
                            <a href="https://www.facebook.com/profile.php?id=100005617545762" target="_blank">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <i class="fa-brands fa-linkedin"></i>
                            <a href="https://www.linkedin.com/in/kyle-andaya-732337293/" target="_blank">
                                LinkedIn
                            </a>
                        </li>
                        <li>
                            <i class="fa-brands fa-github"></i>
                            <a href="https://github.com/Archaii" target="_blank">
                                Github
                            </a>
                        </li>
                    </ul>
                    <span class="copyright"><?php echo $copyright; ?></span>
                </div>
            </div>

        </div>

    </body>
</html>