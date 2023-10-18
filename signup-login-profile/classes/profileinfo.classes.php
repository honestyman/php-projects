<?php

class ProfileInfo extends Dbh{

    protected function getProfileInfo($userID){
        $stmt = $this->connect()->prepare("SELECT * FROM profiles WHERE users_id = ?;");

        if(!$stmt->execute(array($userID))){
            $stmt = null;
            header("Location: profile.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("Location: profile.php?error=profilenotfound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $profileData;
    }

    protected function setNewProfileInfo($profileAbout, $profileTitle, $profileText, $userID){
        $stmt = $this->connect()->prepare("UPDATE profiles SET profiles_about = ?, profiles_introtext = ? WHERE users_id = ?;");

        if(!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userID))){
            $stmt = null;
            header("Location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function setProfileInfo($profileAbout, $profileTitle, $profileText, $userID){
        $stmt = $this->connect()->prepare("INSERT INTO profiles (profiles_about, profiles_introtitle, profiles_introtext, users_id) VALUES (?, ?, ?, ?);");

        if(!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userID))){
            $stmt = null;
            header("Location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }



}