<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div>
                <h3></h3>
                <ul class="menu-main">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">CURRENT SALES</a></li>
                    <li><a href="#">MEMBER</a></li>
                </ul>
            </div>
            <ul class="menu-members">
                <?php
                if(isset($_SESSION["user_id"])){?>
                <li><a href="profile.php"><?php echo $_SESSION["user_id"] ?></a></li>
                <li><a href="includes/logout.php" class="header-login-a">LOGOUT</a></li>
                <?php
                }else{
                    ?>
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#" class="header-login-a">LOGIN</a></li>

                <?php
                }
                ?>
            </ul>
        </nav>
    </header>