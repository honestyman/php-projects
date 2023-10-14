<?php

//METHODS FOR QUERYING DB

class Signup extends Dbh{

    protected function checkUser($uid, $email){
        $stmt = $this->connect()->prepare("SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;");

        if(!$stmt->execute(array($uid, $email))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;

        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }

        return $resultCheck;

    }


}