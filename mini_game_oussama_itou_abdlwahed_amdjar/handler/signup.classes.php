<?php
class Signup extends Dbh{ 
    protected function setUser($uid,$pwd,$email) {
        $stmt  = $this->connect()->prepare('INSERT into user(name,password,email) values( ? , ? , ?  );');
        $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT); 
        if (!$stmt->execute(array($uid,$hashedPwd,$email))) {
            $stmt = null;
            header('Location: ../signupForm.php?error=stmtfail');
            exit();
        }
        $stmt = null;
        
    }

    protected function checkUser($uid,$email) {
        $stmt  = $this->connect()->prepare('SELECT id from user where name = ? or email = ? ;');
        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header('Location: ../signupForm.php?error=stmtfailed');
            exit();
        }
        if ($stmt->rowCount()) {
            $resultCheck = false;
        } else {
            $resultCheck = true; 
        }
        return $resultCheck;
        }

}