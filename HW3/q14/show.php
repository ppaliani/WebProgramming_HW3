<html>
    <style>

        body {
            background-color: rgb(123, 106, 170);
            font-family: 'Poppins', sans-serif;
        }

        #table-container {
            display: flex;
            justify-content: center;
        }

        table {
            border: solid 3px #000;
            border-radius: 5px;
            padding: 3px;
        }

        td {
            padding: 10px;
        }

    </style>
    <title>Q14</title>
<body>
    <div id="table-container">
        
            <?php
            error_reporting(0);
            // Check to make sure passcode is valid (from passcode table)
            // Check if said user has taken survey already
            // IF IS USER AND HAS NOT TAKEN YET:
                // Take info from survey and UPDATE passcode and INSERT answers into survey tables

            $password = $_GET["password"];
            if ($password == "999") {
                $db = mysqli_connect("127.0.0.1", "root", "root", "db2");

                $querySurvey = "SELECT * FROM survey";
                $queryPasscode = "SELECT * FROM passcode";
            
                $surveyResult = mysqli_query($db, $querySurvey);
                $passcodeResult = mysqli_query($db, $queryPasscode);
            
                $surveyRows = mysqli_num_rows($surveyResult);
                $passcodeRows = mysqli_num_rows($passcodeResult);
            
                print "<table>";

                for ($i = 0; $i < $surveyRows; $i++) {
                    $row = mysqli_fetch_assoc($surveyResult);
            
                    $id = $row["id"];
                    $question = $row["question"];
                    $yes = $row["yes"];
                    $no = $row["no"];

                    if ($yes >= 0 && $no >= 0) {
                        $yesPercent = round(($yes/($yes+$no)*100),2);
                        $noPercent = round(($no/($yes+$no)*100),2);
                
                        print "<tr><td>";
                        print "$id: <strong>$question</strong> - $yesPercent% | $noPercent% <br>";
                        print "</td></tr>";
                    } else {
                        print "<tr><td>";
                        print "$id: <strong>$question</strong> - 0% | 0% <br>";
                        print "</td></tr>";
                    }
                }

                print "</table>";
            
            } else {
                print "<h2 style='display:flex;justify-content:center;'>Incorrect password entered, please try again: <a href='http://localhost:8000/q14/results.php'>Return</a></h2>";
            }



            ?>
    </div>
</body>
</html>
