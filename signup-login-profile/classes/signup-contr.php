<?php

class SignupContr{

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __contruct($uid, $pwd, $pwdRepeat, $email){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    //ERROR HANDLERS
    private function emptyInput(){
        $result;

        if(empty($this->uid || $this->pwd || $this->pwdRepeat ||$this->email)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }

    private function invalidUID(){
        $result;

        if(!preg_match("/^[a-zA-Z0-9]*$/", this->uid)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }

    private function invalidEmail(){
        $result;

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }

    private function pwdMatch(){
        $result;

        if($this->pwd !== $this->pwdRepeat){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }

    private function uidTakenCheck(){
        $result;

        if(!$this->checkUser($this->uid, $this->email)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }
}