<?php

if(isset($_POST[submit])){
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    include "../classes/dbh.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.php";

    $login = new LoginContr($uid, $pwd);
    $login->loginUser();
    header("Location: ../index.php?error=none");
}