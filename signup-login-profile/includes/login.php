<?php

//if(isset($_POST[submit])){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //$uid = $_POST["uid"];
    //$pwd = $_POST["pwd"];
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, "UTF-8");
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, "UTF-8");

    include "../classes/dbh.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.php";

    $login = new LoginContr($uid, $pwd);
    $login->loginUser();
    header("Location: ../index.php?error=none");
}