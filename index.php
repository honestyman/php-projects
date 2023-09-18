<?php
    if(isset($_POST["submit"])){
        if(empty($_POST["city"])){
            echo "Enter city name!";
        }else{
            $city = $_POST["city"];
            $API_KEY = "API_KEY";
            $API = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$API_KEY";
            $API_DATA = file_get_contents($API);
            //print_r($API_DATA);

            $weather = json_decode($API_DATA, true);
            print_r($weather);
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>The Weather App</title>
</head>

<body>
    <h1>Weather App</h1>
    <form method="post">
        <input type="text" name="city">
        <input type="submit" name="submit" value="Check weather">
    </form>
</body>

</html>