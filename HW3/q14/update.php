<html>

    <style>

        body {
            background-color: rgb(123, 106, 170);
            font-family: 'Poppins', sans-serif;
        }

    </style>

    <title>Q14</title>
<body>
    <?php
    error_reporting(0);
    // Check to make sure passcode is valid (from passcode table)
    // Check if said user has taken survey already
    // IF IS USER AND HAS NOT TAKEN YET:
        // Take info from survey and UPDATE passcode and INSERT answers into survey tables

    $passcode = $_GET["passcode"];

    $db = mysqli_connect("127.0.0.1", "root", "root", "db2");

    $querySurvey = "SELECT * FROM survey";
    $queryPasscode = "SELECT * FROM passcode WHERE code='$passcode'";

    $surveyResult = mysqli_query($db, $querySurvey);
    $passcodeResult = mysqli_query($db, $queryPasscode);

    $surveyRows = mysqli_num_rows($surveyResult);
    $passcodeRows = mysqli_num_rows($passcodeResult);


    for ($i = 0; $i < $surveyRows; $i++) {
        $row = mysqli_fetch_assoc($passcodeResult);

        $code = $row['code'];
        $complete = $row['complete'];

        if ($passcode != 123 && $passcode != 456 && $passcode != 789 && $passcode != 777 && $passcode != 888 && $passcode != 111 && $passcode != 222 && $passcode != 333 && $passcode != 444 && $passcode != 555) {
            print "<h2 style='display:flex;justify-content:center;'>Incorrect passcode entered, please try again: <a href='http://localhost:8000/q14/survey.php'>Return</a></h2>";
            break;
        }
        
        if ($complete != "0") {
            print "<h2 style='display:flex;justify-content:center;'>User already completed survey! <a href='http://localhost:8000/q14/survey.php'>Return</a></h2>";
            break;
        }

        // Once both conditions are met, record data into tables and display thank you message
        $q1Ans = $_GET["q1"];
        $q2Ans = $_GET["q2"];
        $q3Ans = $_GET["q3"];

        $updateYes1 = "UPDATE survey SET yes = yes + 1 WHERE id='1'";
        $updateNo1 = "UPDATE survey SET no = no + 1 WHERE id='1'";
        $updateYes2 = "UPDATE survey SET yes = yes + 1 WHERE id='2'";
        $updateNo2 = "UPDATE survey SET no = no + 1 WHERE id='2'";
        $updateYes3 = "UPDATE survey SET yes = yes + 1 WHERE id='3'";
        $updateNo3 = "UPDATE survey SET no = no + 1 WHERE id='3'";

        if ($q1Ans == "yes") {
            mysqli_query($db, $updateYes1);
        } else if ($q1Ans == "no") {
            mysqli_query($db, $updateNo1);
        }

        if ($q2Ans == "yes") {
            mysqli_query($db, $updateYes2);
        } else if ($q2Ans == "no") {
            mysqli_query($db, $updateNo2);
        }

        if ($q3Ans == "yes") {
            mysqli_query($db, $updateYes3);
        } else if ($q3Ans == "no") {
            mysqli_query($db, $updateNo3);
        }

        // set complete field to 1 (true) for specific user (based on passcode entered)
        $updateQuery = "UPDATE `passcode` SET `complete`='1' WHERE `code`='$code'";
        $updateSurvey = mysqli_query($db, $updateQuery);

        print "<h2 style='display:flex;justify-content:center;'>Thank you for completing the survey.</h2>";
        break;
    }




    ?>
</body>
</html>