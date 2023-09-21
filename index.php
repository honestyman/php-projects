

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>The Weather App</title>
    <!--jquery cdn link-->
    <script
    src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="crossorigin="anonymous"></script>
    <!--ajax link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--js link-->
    <script src="script.js" defer></script>
    <!--css file-->
    <link rel="stylesheet" href="style.css">
    <!--bootstrap link-->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->
</head>

<body>
    <div class="container">
    <h1>Weather App</h1>
    <form id="form" method="post" action="">
        <input type="text" name="city">
        <button id="button" type="submit" name="submit">Check weather</button>
    </form>
    </div>
</body>

</html>

<?php
    if(isset($_POST["submit"])){
        if(empty($_POST["city"])){
            echo "<br>";
            echo "Enter the name of the city!";
        }else{
            $city = $_POST["city"];
            //$API_KEY = "API_KEY";
            $API_KEY = "19fdeaeefe22a24143070b3cf1b420dd";
            $API = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$API_KEY";
            $API_DATA = file_get_contents($API);
            //print_r($API_DATA);

            $weather = json_decode($API_DATA, true);
            //print_r($weather);
            $celsius = $weather["main"]["temp"] - 237;

            echo "<br>";
            echo "Weather conditions: " . $weather["weather"][0]["description"];
            echo "<br>";
            echo "Temperature: " . $celsius . "&degC";
            echo "<br>";
            echo "Athmospheric pressure: " . $weather["main"]["pressure"];
            echo "<br>";
            echo "Wind speed: " . $weather["wind"]["speed"] . "m/sec";
            echo "<br>";
            echo "Cloundness: " . $weather["clouds"]["all"];
        }


    }

?>