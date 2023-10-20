<?php
include_once "header.php";
include "classes/dbh.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-contr.php";
include "classes/profileinfo-view.php";
$profileInfo = new ProfileInfoView();
?>

<h3>ABOUT</h3>
<p>
    <?php
    $profileInfo->fetchAbout($_SESSION["userid"]);
    ?>
</p>

<h3>HI!</h3>
<p>
    <?php
    $profileInfo->fetchTitle($_SESSION["userid"]);
    ?>
<br><br>
    <?php
    $profileInfo->fetchText($_SESSION["userid"]);
    ?>
</p>

</body>

</html>