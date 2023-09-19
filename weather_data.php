<?php
    if(isset($_POST["submit"])){
        if(empty($_POST["city"])){
            echo "Enter the name of the city!";
        }else{
            $city = $_POST["city"];
            $API_KEY = "API_KEY";
            $API = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$API_KEY";
            $API_DATA = file_get_contents($API);
            //print_r($API_DATA);

            $weather = json_decode($API_DATA, true);
            //print_r($weather);
            $celsius = $weather["main"]["temp"] - 237;

            echo "Weather conditions: " . $weather["weather"][0]["description"];
            echo "<br>";
            echo $celsius . "degrees Celsius";
            echo "<br>";
            echo "Athmospheric pressure: " . $weather["main"]["pressure"];
            echo "<br>";
            echo "Wind speed: " . $weather["wind"]["speed"];
            echo "<br>";
            echo "Cloundness: " . $weather["clouds"]["all"];
        }


    }