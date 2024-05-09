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
        <form method="get" action="http://localhost:8000/q14/show.php">
            <h1>Enter Password for Results:</h1>

            <label for="password">Enter Password:</label>
            <input type="text" name="password">
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>