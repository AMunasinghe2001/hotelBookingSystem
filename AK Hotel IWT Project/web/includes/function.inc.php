<?php

function validMail($email)
{
    if(filter_var ($email, FILTER_VALIDATE_EMAIL))
    {
        return true;
    }
    else{
        return false;
    }
}


function validUid($userName)
{
    if( preg_match ( "/^[a-zA-Z0-9]*$/", $userName ))
    {
        return true;
    }
    else{
        return false;
    }
}

function passwordMatch($pwd , $pwdRepeat)
{
    if( $pwd === $pwdRepeat)
    {
        return true;
    }
    else{
        return false;
    }
}


function uidExists( $conn , $username , $email)
{
    $sql= "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt , $sql))
    {
        header ("Location: ../register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username , $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else{
        return true;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn , $name , $email , $username , $pwd)
{
    $sql = "INSERT INTO users(usersName , usersEmail, usersUid , usersPwd ) values (?,?,?,?); ";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt , $sql))
    {
        header ("Location: ../register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd , PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email , $username , $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../login.php?error=none");
    exit();

    
}



function loginuser($conn ,$username , $pwd)
{


$uidExist = uidExists( $conn , $username , $username);

    if ($uidExists === true)
    {
        header ('Location: ../login.php?error=wronglo');
        
    }
   
    $pwdHashed = $uidExist['usersPwd'];
    
    //$uidExist['usersPwd'];

  

    $checkPwd = password_verify($pwd , $pwdHashed);

    if($checkPwd === true)
    {
        session_start();
        $_SESSION["userid"]= $uidExist["usersId"];
        $_SESSION["useruid"] = $uidExist["usersUid"];
        $_SESSION["usersname"] = $uidExist ["usersName"];

        header("Location: ../home.php");
        
    }
    else{
        header ("Location: ../login.php?error=wronglogin".$pwdHashed);
    }

}

