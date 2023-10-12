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

        if(is_input_empty($username, $pwd)){
            $errors["empty_input"] = "Fill in all fields!";
        }

        $result = get_user($pdo, $username);

        if(is_username_wrong($result)){
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        if(!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])){
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        require_once "config_session.php";

        if($errors){
            $_SESSION["errors_signup"] = $errors;

            header("Location: ../index.php");
            die();
        }

        //creating new session ID
        $newSessionID = session_create_id();
        $sessionID = $newSessionID . "_" . $result["id"];
        sessin_id($sessionID);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../index.php?login=success");
        $pdo = null;
        $stmt = null;
        die();
        
    }catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
    }

}else{
    header("Location: ../index.php");
    die();
}

