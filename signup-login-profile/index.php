<?php
include_once "header.php";
?>

<h3>Signup</h3>

<form action="includes/signup.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdRepeat" placeholder="Repeat password">
    <input type="text" name="email" placeholder="E-mail">
    <button type="submit" name="submit">Signup</button>
</form>

<h3>Login</h3>

<form action="includes/login.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Login</button>
</form>

<h3>Logout</h3>

    <form action="includes/logout.php" method="post">
        <button>Logout</button>
    </form>
</body>

</html>