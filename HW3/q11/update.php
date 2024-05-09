<html>

    <style>
        body {
            background-color: rgb(14, 15, 59);
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table, th, td {
            color: aliceblue;
            border-collapse: collapse;
            padding: 5px;
        }

        th, td {
            border: solid 2px #FFF;
        }

        h1, h2 {
            color: aliceblue;
        }

    </style>
<title>Q11</title>
<body>
    <h1>University Cost Calculator:</h1>
    <table>
    <?php
    error_reporting(0);
        $credits = $_POST['credits'];
        $grad_status = $_POST['grad_status'];
        $state_status = $_POST['state_status'];
        $dorm = $_POST['dorm'];
        $dining = $_POST['dining'];
        $parking = $_POST['parking'];
        $tuition = 0;
        $total = 0;

        if ($credits < 1 || $credits > 18) {
            print "<h2>Invalid amount of credits entered. Please try again.</h2>";
        } else {

            if ($grad_status == "Undergraduate" && $state_status == "In State") {
                $tuition += 200;
            } else if ($grad_status == "Graduate" && $state_status == "In State") {
                $tuition += 400;
            } else if ($grad_status == "Undergraduate" && $state_status == "Out of State") {
                $tuition += 300;
            } else if ($grad_status == "Graduate" && $state_status == "Out of State") {
                $tuition += 600;
            }

            $tuition = $tuition * $credits;
            $total = $tuition;

            if ($dorm == 1) {
                $dorm = 1000;
                $total += 1000;
            }
            $dorm = number_format((float)$dorm, 2, '.', ',');

            if ($dining == 2) {
                $dining = 500;
                $total += 500;
            }
            $dining = number_format((float)$dining, 2, '.', ',');

            if ($parking == 3) {
                $parking = 200;
                $total += 200;
            }
            $parking = number_format((float)$parking, 2, '.', ',');

            $tuition = number_format((float)$tuition, 2, '.', ',');
            $total = number_format((float)$total, 2, '.', ',');

            print " <tr>
                        <th>Category</th>
                        <th>Price</th>
                    <tr>
                    <tr>
                        <td><strong>Credits: </strong></td>
                        <td>$credits</td>
                    <tr>
                    <tr>
                        <td><strong>Academic Status: </strong></td>
                        <td>$grad_status</td>
                    <tr>
                    <tr>
                        <td><strong>State Status: </strong></td>
                        <td>$state_status</td>
                    <tr>
                    <tr>
                        <td><strong>Tuition: </strong></td>
                        <td>$$tuition</td>
                    <tr>
                    <tr>
                        <td><strong>Dorm: </strong></td>
                        <td>$$dorm</td>
                    <tr>
                    <tr>
                        <td><strong>Dining: </strong></td>
                        <td>$$dining</td>
                    <tr>
                    <tr>
                        <td><strong>Parking: </strong></td>
                        <td>$$parking</td>
                    <tr>
                    <tr>
                        <td><strong>Total Cost: </strong></td>
                        <td>$$total</td>
                    <tr>";
        }








    ?>
    </table>


</body>
</html>