<html>
    <style>
        body {
            background-color: rgb(48, 48, 133);
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            color: aliceblue;
        }

        h3 {
            margin: 2px;
        }

        h2 {
            color: aliceblue;
            display: inline;
            margin: 5px;
        }

        table, th, td {
            border-collapse: collapse;
        }

        table {
            border: solid 2px aliceblue;
        }

        th, td {
            color: aliceblue;
            padding: 10px;
        }

        tr:hover {
            background-color: rgb(39, 39, 109);
        }

        #table-2 th, #table-2 td {
            border: solid 1px aliceblue;
        }

        input {
            margin: 5px;
            padding: 8px;
            border: solid rgb(151, 125, 237) 4px;
            border-radius: 8px;
        }

        button {
            margin: 5px;
            border: solid rgb(151, 125, 237) 3px;
            border-radius: 4px;
        }

        button:hover {
            cursor: pointer;
            background-color: rgb(177, 177, 177);
        }

        #container {
            width: 33vw;
            margin: auto;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .input-boxes {
            display: flex;
            justify-content: space-between;
        }

    </style>
    <title>Q10</title>
<body>

<div id="container">
        <div>
            <h1>Total Amount After Interest:</h1>
        </div>
    
        <div id="table-container">
            <table>
                <tr>
                <?php
                    error_reporting(0);
                    $initial = $_GET['initial'];
                    $interest = $_GET['interest'];
                    $displayInterest = $interest * 100;
                    $years = $_GET['years'];

                    print " <td><strong>Initial Amount: </strong>$initial</td>
                            <td><strong>Interest: </strong>$displayInterest%</td>
                            <td><strong>Years: </strong>$years</td>";
                ?>

                </tr>
            </table>
        </div>
        <br>
        <div>
            <table id="table-2">
                <tr>
                    <th>Years</th>
                    <th>Amount</th>
                </tr>
                <!-- start PHP loop -->
                <?php
                    $amount = 0;
                    $year = 0;
                    $yearlyInterest = $initial;

                    for ($i = $years; $i > 0; $i--) {
                        // calculate compound interest
                        $yearlyInterest = $yearlyInterest * (1 + $interest);
                        $yearlyInterest = number_format($yearlyInterest, 2, '.', '');
                        $year += 1;
                        print " <tr>
                                    <td>$year</td>
                                    <td>$$yearlyInterest</td>
                                <tr>
                                ";
                    }
                ?>
                <!-- end PHP loop -->
            </table>
        </div>

    </div>
</body>
</html>