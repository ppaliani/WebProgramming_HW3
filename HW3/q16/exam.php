<html>

    <style>

        body {
            background-color: rgb(123, 106, 170);
            font-family: 'Poppins', sans-serif;
        }

        form {
            border: solid 2px #000;
            border-radius: 10px;
            padding: 20px;
        }

        #large-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* CSS */
        .button-27 {
            appearance: none;
            background-color: #000000;
            border: 2px solid #1A1A1A;
            border-radius: 15px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            font-size: 16px;
            font-weight: 600;
            line-height: normal;
            margin: auto;
            min-height: 20px;
            min-width: 0;
            outline: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: 25%;
            will-change: transform;
        }

        .button-27:disabled {
            pointer-events: none;
        }

        .button-27:hover {
            box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
            transform: translateY(-2px);
        }

        .button-27:active {
            box-shadow: none;
            transform: translateY(0);
        }

    </style>

<body>
    <div id="large-container">
                <!-- Start PHP Loop -->

                <?php
                    // error_reporting(0);
                    $passcode = $_GET['passcode'];

                    // Connecting to database
                    $db = mysqli_connect("127.0.0.1","root","root","db4");

                    $completeQuery = "SELECT complete FROM students WHERE code='$passcode'";
                    $completeResults = mysqli_query($db,$completeQuery);
                    $completeRows = mysqli_num_rows($completeResults);

                    for ($i = 0; $i < $completeRows; $i++) {
                        $row = mysqli_fetch_assoc($completeResults);
                        $complete = $row['complete'];
                    }

                    if ($passcode != 111 && $passcode != 222 && $passcode != 333 && $passcode != 444 && $passcode != 555 && $passcode != 666 && $passcode != 777 && $passcode != 888 && $passcode != 123) {
                        print "<h2>Incorrect password entered. Please try again</h2>";
                    } else if ($complete != 0) {
                        print "<h2>User has already completed the exam!</h2>";
                    } else {
                        
                        print " 
                        <h2>Examination:</h2>
                        <form method='get' action='grade.php'>
                            <table>
                        
                                <tr><td><label for='q1'><strong>What is the first language students learn at EMU in COSC?</strong></label></td></tr>
                                <tr><td><input type='radio' value='Java' name='q1'>Java</td></tr>
                                <tr><td><input type='radio' value='JavaScript' name='q1'>JavaScript</td></tr>
                                <tr><td><input type='radio' value='GO' name='q1'>GO</td></tr>
                                <tr><td><input type='radio' value='LISP' name='q1'>LISP</td></tr>

                                <tr><td><label for='q2'><strong>What language is currently the most sought after?</strong></label></td></tr>
                                <tr><td><input type='radio' value='Rust' name='q2'>Rust</td></tr>
                                <tr><td><input type='radio' value='MySQL' name='q2'>MySQL</td></tr>
                                <tr><td><input type='radio' value='JavaScript' name='q2'>JavaScript</td></tr>
                                <tr><td><input type='radio' value='Ruby' name='q2'>Ruby</td></tr>

                                <tr><td><label for='q3'><strong>What type of language paradigm does Prolog fall under?</strong></label></td></tr>
                                <tr><td><input type='radio' value='Functional' name='q3'>Functional</td></tr>
                                <tr><td><input type='radio' value='Logical' name='q3'>Logical</td></tr>
                                <tr><td><input type='radio' value='Imperative' name='q3'>Imperative</td></tr>
                                <tr><td><input type='radio' value='OO' name='q3'>OO</td></tr>

                                <tr><td><label for='q3'><strong>What type of language paradigm does Fortran fall under?</strong></label></td></tr>
                                <tr><td><input type='radio' value='Funcitonal' name='q4'>Functional</td></tr>
                                <tr><td><input type='radio' value='Logical' name='q4'>Logical</td></tr>
                                <tr><td><input type='radio' value='Imperative' name='q4'>Imperative</td></tr>
                                <tr><td><input type='radio' value='OO' name='q4'>OO</td></tr>

                                <tr><td><label for='q3'><strong>What model is used for determining margin, border, padding, and content size?</strong></label></td></tr>
                                <tr><td><input type='radio' value='The Standard Model' name='q5'>The Standard Model</td></tr>
                                <tr><td><input type='radio' value='The Box Model' name='q5'>The Box Model</td></tr>
                                <tr><td><input type='radio' value='The Spacing Model' name='q5'>Yhe Spacing Model</td></tr>
                                <tr><td><input type='radio' value='The Size Model' name='q5'>The Size Model</td></tr>
                                
                            </table>
                            <br>
                            <label for='passcode'><strong>Enter Passcode:</strong></label>
                            <input type='text' name='passcode'>
                            <br>
                            <button type='submit' class='button-27'>Submit</button>
                        </form>";
                    }


                ?>
    </div>
</body>
</html>