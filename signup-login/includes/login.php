<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try{
        require_once "dbh.php";
        require_once "login_model.php";
        require_once "login_contr.php";

        //ERROR HANDLERS
        $errors = [];

        if(is_input_empty($username, $pwd, $email)){
            $errors["empty_input"] = "Fill in all fields!";
        }

        require_once "config_session.php";

        if($errors){
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email
            ];

            $_SESSION["signup_data"] = $signupData;

            header("Location: ../index.php");
            die();
        }
        
    }catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
    }

}else{
    header("Location: ../index.php");
    die();
}

