<?php
class Login extends Dbh{  
    protected function getUser($uid,$pwd) {
        $stmt  = $this->connect()->prepare('SELECT password from user where email = ? ;');
        if (!$stmt->execute(array($uid))) {
            $stmt = null;
            header('Location: ../login.php?error=invalidEmail');
            exit();
        }        

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header('Location: ../login.php?error=usernotfound&uid='.$uid);
            exit();
        }
        $pwdhashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpwd =password_verify($pwd,$pwdhashed[0]['password']);
        if ($checkpwd == false) {
            $stmt = null;
            header('Location: ../login.php?error=wrongpwd&uid='.$uid);
            exit();
        } elseif ($checkpwd == true) {
            $stmt = $this->connect()->prepare('SELECT * from user where (password=? and email = ?);');
            if (!$stmt->execute(array($pwdhashed[0]['password'],$uid))) {
                $stmt = null;
                header('Location: ../login.php?error=stmtfailed');
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header('Location: ../login.php?error=usernotfound');
                exit();
            }
            // ($stmt->fetchAll(PDO::FETCH_ASSOC));
            session_start();
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['user'] = $user;
            // $_SESSION['useruid'] = $user[0]['users_uid'];
            // $_SESSION['userid'] = $user[0]['users_id'];
            // return response()->json($user);
        }

        $stmt=null;
    }
}
