<?php

class ProfileInfoContr extends ProfileInfo{
   
    private $userID;
    private $userUID; //username

    public function __construct($userID, $userUID){
        $this->userID = $userID;
        $this->userUID = $userUID;
    }

    public function defaultProfileInfo(){
        $profileAbout = "Tell people about yourself!";
        $profileTitle = "Hi! I am " . $this->userUID;
        $profileText = "Welcome to my profile page!";

        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userID);
    }

    public function updateProfileInfo($about, $introTitle, $introText){
        //error handlers
        if($this->emptyInputCheck($about, $introTitle, $introText) == true){
            header("Location: profilesettings.php?error=emptyinput");
            exit();
        }

        //update profile info
        $this->setNewProfileInfo($about, $introTitle, $introText, $this->userID);
    }

    private function emptyInputCheck($about, $introTitle, $introText){
        $result;
        if(empty($about) || empty($introTitle) || empty($introText)){
            $result = true;
        }else{
            $result = false;
        }

        return $result;
    }

}