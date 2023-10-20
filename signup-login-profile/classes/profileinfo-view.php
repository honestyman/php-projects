<?php

class ProfileInfoView extends ProfileInfo{

    public function fetchAbout($userID){
        $profileInfo = $this->getProfileInfo($userID);
        echo $profileInfo[0]["profiles_about"];
    }

    public function fetchTitle($userID){
        $profileInfo = $this->getProfileInfo($userID);
        echo $profileInfo[0]["profiles_introtitle"];
    }

    public function fetchText($userID){
        $profileInfo = $this->getProfileInfo($userID);
        echo $profileInfo[0]["profiles_introtext"];
    }

    
}