<?php
include_once "header.php";
include "classes/dbh.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-contr.php";
include "classes/profileinfo-view.php";
$profileInfo = new ProfileInfoView();
?>

<section class="profile">
    <div class="profile-bg">
        <div class="wrapper">
            <div class="profile-settings">
                <h3>PROFILE SETTINGS</h3>
                <p>Change your about section here!</p>
                <form action="includes.profileinfo.php" method="post">
                    <textarea name="about" cols="30" rows="10" placeholder="Profile about section..."></textarea>
                    <br><br>
                    <p>Change your profile page intro here!</p>
                    <br>
                    <input type="text" name="introtitle" placeholder="Profile title...">
                    <textarea name="introtext" rows="10" cols="30" placeholder="Profile introduction..."></textarea>
                    <button type="submit" name="submit">SAVE</button>
                </form>
            </div>
        </div>
    </div>
</section>

</body>

</html>