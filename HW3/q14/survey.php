<html>
    <style>

        body {
            background-color: rgb(123, 106, 170);
            font-family: 'Poppins', sans-serif;
        }

        #form-container {
            display: flex;
            justify-content: center;
        }

        form {
            border: solid 3px #000;
            border-radius: 5px;
            padding: 15px;
        }

        input {
            margin: 10px;
        }

    </style>
    <title>Q14</title>
<body>
    
    <div id="form-container">
        <form method="get" action="http://localhost:8000/q14/update.php" autocomplete="off">
            <h1>Survey</h1>
            <table>
            <?php
                error_reporting(0);
                $questionArray = array("Do you have experience with HTML?", "Do you have experience with Rust?",
                                    "Do you have experience with Prolog?");
                $yes = "yes";
                $no = "no";

                for ($i = 1; $i <= 3; $i++) {
                    $k = $i - 1;
                    print " <tr>
                                <td><label for='q$i'>$questionArray[$k]</label></td>
                                <td><input type='radio' name='q$i' value='$yes' required> YES</td>
                                <td><input type='radio' name='q$i' value='$no' required> NO</td>
                            </tr>";
                }
            
            
            ?>
            </table>
                <label for='passcode'>Enter Passcode:</label>
                <input type='text' name='passcode'>
                <button type='submit'>Submit</button>
        </form>
    </div>
</body>
</html>