<html>

    <title>Q12</title>

    <style>

        /* The styling of this webpage will be based on the Harvard Resume Template 
        https://cdn-careerservices.fas.harvard.edu/wp-content/uploads/sites/161/2023/08/College-resume-and-cover-letter-4.pdf */

        /* Sets background to softer color and easier to read font family */
        body {
            background-color: rgb(217, 237, 255);
            font-family: "Poppins", sans-serif;
        }

        /* Centers elements to the vertical center of the webpage */
        .style-center {
            display: flex;
            justify-content: center;
        }

        /* This is to make the section header align with the vertical center of the webpage */
        .section-header {
            display: flex;
            justify-content: center;
        }

        /* This will separate the affected information to have space in-between each other */
        .education-header {
            display: flex;
            justify-content: space-between;
        }

        .education-header h3 {
            margin: 0px;
        }

        .experience-header {
            display: flex;
            justify-content: space-between;
        }

        .experience-header h3 {
            margin: 0px;
        }

        .leadership-header {
            display: flex;
            justify-content: space-between;
        }

        .leadership-header h3 {
            margin: 0px;
        }

        /* Eliminates the margin surounding the elements within the section-body classes */
        .section-body h3, p {
            margin: 0px;
        }

        .experience-body h3, h4 {
            margin: 0px;
        }

    </style>

<body>
       
    <?php
        error_reporting(0);
        $pwd = $_GET['pwd'];
        $P1 = 111;
        $P2 = 222;
        $P3 = 333;
        $P4 = 444;
        $P5 = 555;

        if ($pwd != $P1 && $pwd != $P2 && $pwd != $P3 && $pwd != $P4 && $pwd != $P5) {
            print "<div style='display:flex;justify-content:center;'><h2>Incorrect password entered. Please try again.</h2></div>";
        } else {
            print " <div class='style-center'>
                        <h3>Paul Paliani</h3>
                    </div>
                    <hr>
                    <!--Contact Details-->
                    <div class='style-center'>
                        <p><strong>email:</strong> ppaliani@emich.edu <strong>phone:</strong> (734)-417-3095 <strong>address:</strong> 3131 State St</p>
                    </div>
                
                    <div class='main-container'>
                
                        <div id='education-section'>
                            <div class='section-header'>
                                <!--Previous Education Details-->
                                <div class='style-center'>
                                    <h3>Education</h3>
                                </div>
                            </div>
                        </div>
                        <div class='education-header'>
                            <h3 id='EMU'>Eastern Michigan University</h3>
                            <p align='right'>
                                Ypsilanti, MI<br>
                                May 2024
                            </p>
                        </div>
                
                        <div>
                            <p align='left'>
                                Bachelor of Science in Computer Science with Honors. GPA 3.75<br>
                                Relevant Coursework: Operating Systems and Computer Organization<br>
                                Committed 10 hours per week to club Ultimate Frisbee team.
                            </p>
                            <br>
                        </div>
                
                        <div class='education-header'>
                            <h3 id='WCC'>Wasthenaw Community College</h3>
                            <p align='right'>
                                Ypsilanti, MI<br>
                                December 2021
                            </p>
                        </div>
                
                        <div>
                            <p>
                                Associate in Arts with High Honors. GPA 3.90<br>
                                Enrolled college level courses during sophomore year.<br>
                                Member of varsity Ultimate Frisbee team.
                            </p>
                        </div>
                
                        <div id='experience-section'>
                            <div class='section-header'>
                                <div class='style-center'>
                                    <h3>Experience</h3>
                                </div>
                            </div>
                        </div>
                        <div class='experience-header'>
                            <div id='synergy'>
                                <h3>Synergy Fiber</h3>
                                <h4>System Intern</h4>
                            </div>
                            <p align='right'>
                                Ann Arbor, MI<br>
                                May 2023 - Current
                            </p>
                        </div>
                        <div>
                            <p>
                                Performed company wide systems solutions such as email management and network design.
                                Worked on location at live construction sites to implement internet frameworks for clients.
                            </p>
                        </div>
                        <div style='margin-top: 20px;'></div>
                        <div class='experience-header'>
                            <div id='mouvit'>
                                <h3>Mouvit LLC</h3>
                                <h4>Head of Social Media & Marketing</h4>
                            </div>
                            <p align='right'>
                                Ann Arbor, MI<br>
                                June 2022 - September 2022
                            </p>
                        </div>
                        <div>
                            <p>
                                Wrote professional posts for company website and social media reaching 150+ followers.
                                Filmed, photographed, and produced delivery robot at 5 client locations, and displayed content over all social medias.
                                Redesigned and grew company website, doubling weekly new users.
                            </p>
                        </div>
                
                        <div id='leadership'>
                            <div class='section-header'>
                                <div class='style-center'>
                                    <h3>Leadership</h3>
                                </div>
                            </div>
                        </div>
                        <div class='leadership-header'>
                            <div id='ultimate'>
                                <h3>EMU Hellfish Ultimate Frisbee</h3>
                                <h4>Vice President</h4>
                            </div>
                            <p align='right'>
                                Ypsilanti, MI<br>
                                August 2021 - June 2022
                            </p>
                        </div>
                        <div>
                            <p>
                                Was the Vice President of EMUs ultimate frisbee team. Worked with the president on scheduling tournaments,
                                jersey ordering, team practices, travel plans, etc.
                            </p>
                        </div>
                
                
                        <!--Skills-->
                        <div class='style-center'>
                            <h3>Skills & Interests</h3>
                        </div>
                        <div class='style-left'>
                            <p><strong>Technical:</strong> Java, HTML5, CSS, Microsoft Office, Google Drive, Zoom, Adobe Premiere, Adobe After Effects, Python<br>
                                <strong>Interests:</strong> Ultimate Frisbee, Space exploration, NASA programs<br>
                                </p>
                        </div>
                    </div>";
        }

    ?>

</body>
</html>