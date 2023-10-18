<?php

//if(isset($_POST["submit"])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //$uid = $_POST["uid"];
    //$pwd = $_POST["pwd"];
    //$pwdRepeat = $_POST["pwdRepeat"];
    //$email = $_POST["email"];
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, "UTF-8");
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, "UTF-8");
    $pwdRepeat = htmlspecialchars($_POST["pwdRepeat"], ENT_QUOTES, "UTF-8");
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8");

    include "../classes/dbh.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.php";

    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);
    $signup->signupUser();

    $userID = $signup->fetchUserID($uid);

    //Instantiate ProfileInfoContr class
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.php";
    $profileInfo = new ProfileInfoContr($userID, $uid);
    $profileInfo->defaultProfileInfo();

    header("Location: ../index.php?error=none");
}