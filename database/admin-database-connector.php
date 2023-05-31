<?php

$servername = "localhost"; // 162.241.123.26 
$database = "Wonder_Tour_Database";
$dataUserName = "Pooja";
$dataPassword = "poojadatabase";
$table_name = "Admin_Table";


$callFun = $_GET['CallFunction'];
if ($callFun == 'LoginDetailMatch') {
    isLoginDetailMatch();
}else if($callFun == 'SessionPresent'){
    checkIfSessionPresent();
}else{
    destroySession();
}


function isLoginDetailMatch()
{
    global $servername, $database, $dataUserName, $dataPassword, $table_name;
    // Create connection using musqli_connect function
    $conn = mysqli_connect($servername, $dataUserName, $dataPassword, $database);
    // Connection Check
    $userName = $_GET['userName'];
    $pass = $_GET['password'];
    if(empty($userName) || empty($pass)){
        echo 'false';
    }

    if (!$conn) {
        die("Connection failed here: ");
    } else {
        ini_set("display_errors", 1);
        error_reporting(E_ALL);
        $sql = "SELECT * FROM $table_name WHERE UserName=? And Password=?;";
        $stmt =  mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo 'false';
        }
        mysqli_stmt_bind_param($stmt,'ss',$userName,$pass);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        if(mysqli_fetch_assoc($resultData)){
            session_start();
            $_SESSION["UserName"]=$userName ;
            echo 'true';
        }else{
            echo 'false';
        }
    }
    $conn->close();
}

function checkIfSessionPresent(){
    session_start();
    if (isset($_SESSION["UserName"])) {
        echo true;
    }else{
        echo false;
        
    }
}


function destroySession(){
    session_start();
    session_unset();
    session_destroy();
}



