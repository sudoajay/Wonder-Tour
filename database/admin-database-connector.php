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
        echo "<div id='leftHandSide'>
        <button id='allFreeBtn' onclick=\"getallDataTable('All Free')\" class='btn btn-primary btn-large'>Booking<span id='allFreeSpan' class='itemCount'>
          </span></button>
      
        
      </div>

      
      <div id='rightHandSide'>
      <button id='allSubcriptionBtn' onclick=\"getallDataTable('All Subscription')\" class='btn btn-primary btn-large'>AL Subcription  <span
            id='allSubcriptionSpan' class='itemCount'>
        <button id='totalSubcriptionBtn' onclick=\"getallDataTable('Total Subscription')\" class='btn btn-primary btn-large'>TO Subcription <span
            id='totalSubcriptionSpan' class='itemCount'>
          </span></button>
        <button id='newSubcriptionBtn' onclick=\"getallDataTable('New Subscription')\" class='btn btn-primary btn-large'>NE Subcription <span id='newSubcriptionSpan'
            class='itemCount'>
          </span></button>
        <button id='expireSubcriptionBtn' onclick=\"getallDataTable('Expire Subscription')\" class='btn btn-primary btn-large'>EX Subcription <span
            id='expireSubcriptionSpan' class='itemCount'>
          </span></button>
        <button id='addedSubcriptionBtn' onclick= \"updateConfirm('SubscriptionCanva')\" class='btn btn-primary btn-large'>AL Added</button>
        <button id='removeSubcriptionBtn' onclick= \"hideConfirm('SubscriptionCanva')\" class='btn btn-primary btn-large'>HI Expired</button>
        <button id='PaymentFailed' onclick=\"getallDataTable('Payment Failed')\" class='btn btn-primary btn-large'>PA Failed <span
        id='paymentFailedSpan' class='itemCount'>
      </div>
  
      <div id='extactLoginTime'>
      <button id='addMutipleBtn' onclick= \"showOrHideTextArea()\" class='btn btn-primary btn-large'>Mul Add</button>
        <button id='loginTime' class='btn btn-primary btn-large'></button>
        <button id='destorySessionBtn' onclick= \"destroySessions()\" class='btn btn-primary btn-large'>Dest Sess</button>
      </div>

      <div id ='mutipleDiv'>
      <textarea id='textAreaId'  rows='1' placeholder='Add Multiple Email'></textarea>
       <button id='submitMutiple' type='submit' class='btn btn-primary btn-block btn-large' onclick= \"addMultipleEmailConfirm()\" >Submit Them</button>
      </div>
      
  
      <div id='table'></div>";
    }else{
        echo false;
        
    }
}


function destroySession(){
    session_start();
    session_unset();
    session_destroy();
}



