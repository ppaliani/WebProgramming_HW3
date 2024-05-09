<html>
    <style>

        body {
            background-color: rgb(48, 146, 232);
        }

        img {
            border: solid 3px #000;
            padding: 15px;
            width: 500px;
            height: 500px;
            border-radius: 8px;
        }

        h1 {
            margin: 0px;
        }
        
        h3 {
            margin: 0px;
        }

        div#heading-container {
            border: solid 3px #000;
            padding: 15px;
            display: flex;
            justify-content: center;
            width: 50%;
            margin: 20px;
            border-radius: 8px;
        }

        div#quote-container {
            border: solid 3px #000;
            padding: 15px;
            border-radius: 8px;
        }

        div#body-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        div#p-container {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

    </style>
    <title>Q9</title>
<body>
    <?php
    error_reporting(0);
    // Random 0 or 1

    $websitePicker = rand(0,1);
    $imagePicker = rand(0,3);
    $quotePicker = rand(0,3);

    $imageArray = array("Assets/800px-SMP_Dash_Mushroom.jpg",
                        "Assets/d7f6f79a-3134-45fc-80cc-4bb27a9a59c3.f2418e95d70bce2a5af04487e717b65e.jpeg",
                        "Assets/16181_squeeze-ko-can-maria-2 .jpg",
                        "Assets/SpongeBob_SquarePants_character.svg.png");
    $quoteArray = array("“Appear weak when you are strong, and strong when you are weak.”",
                        "“The supreme art of war is to subdue the enemy without fighting.”",
                        "“In the midst of chaos, there is also opportunity”",
                        "“The greatest victory is that which requires no battle.”");

    // If Random=0
    if ($websitePicker == 0) {
        $printWebsiteNum = $websitePicker+1;
        print "<div id='body-container'>
                    <div id='heading-container'>
                        <h1>Website $printWebsiteNum</h1>
                    </div>
                    <div>
                        <img src='$imageArray[$imagePicker]' alt='randomImage'>
                    </div>
                </div>";
    } else {
        $printWebsiteNum = $websitePicker+1;
        print "<div id='body-container'>
                    <div id='heading-container'>
                        <h1>Website $printWebsiteNum</h1>
                    </div>
                    <div id='quote-container'>
                        <h3>$quoteArray[$quotePicker]</h3>
                        <p><i>- Sun Tzu, The Art of War</i></p>
                    </div>
                </div>";
    }

    // Set clock up
    date_default_timezone_set('EST');

    $dateTime = date('j/m/y l h:i:s a ');   
    print "<div id='p-container'>
                <p>$dateTime</p>
            </div>";

    
    ?>
</body>
</html>
