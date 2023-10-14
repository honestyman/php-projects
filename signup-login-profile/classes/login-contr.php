<?php

class LoginContr extends Login{

    private $uid;
    private $pwd;

    public function __contruct($uid, $pwd){
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser(){
        if($this->emptyInput() == false){
            header("Location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->uid, $this->pwd);
    }

    //ERROR HANDLERS
    private function emptyInput(){
        $result;

        if(empty($this->uid || $this->pwd)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }

    
}