<html>
<head> 
<style>
  h1 {text-align: center;}
  table, td {
      width: 100%; 
      border-style: solid; border-color: black; border-width: 2px; 
      border-collapse: collapse;
      padding: 8px;}
</style>
<title>Q13</title>
</head>

<body>
   <h1> Message board </h1>

   <table>

   <?php
      error_reporting(0);
      $db = mysqli_connect("127.0.0.1", "root", "root", "db1");
        
        $message = $_GET["message"];

        date_default_timezone_set("America/New_York");
        $date = date("Y/m/d h:iA");

        $query = "INSERT INTO messages(message, date) VALUES('$message', '$date')";

        $result = mysqli_query($db, $query);

        $query = "SELECT * FROM messages";

        $result = mysqli_query($db, $query);

        $num_rows = mysqli_num_rows($result);

        for ($i = 0; $i < $num_rows; $i++) {
            $row = mysqli_fetch_assoc($result);

            $date = $row["date"];
            $message = $row["message"];

            print "<tr><td>";
            print "$message<br>";
            print "$date";
            print "</td></tr>";
        }
   ?>

   </table>
   <br>

   <form method="get" action="http://localhost:8000/q13/update.php">
      <input type="text" size="100" maxlength="100" name="message"></input>
      <input type="submit" value="Post Message"></input>
   </form>
   
   </body>
</html>


