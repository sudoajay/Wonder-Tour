<?php





$servername = "localhost"; // 162.241.123.26 
$database = "Wonder_Tour_Database";
$dataUserName = "Pooja";
$dataPassword = "poojadatabase";
$bookingTable = "Booking_Table";
$getInTouchTable = "GetInTouch_Table";



// Create connection using musqli_connect function
$conn = mysqli_connect(
    $servername,
    $dataUserName,
    $dataPassword,
    $database
);

// date_default_timezone_set('Asia/Kolkata');
// $date = date('Y-m-d H:i:s');

// if (isset($_POST["sbmt"])) {
//     insertGetInTouchData();
// }



$callingFunctionGet = $_POST['functionName'];
if ($callingFunctionGet == 'Booking Table') {
    insertBookingData();
} elseif ($callingFunctionGet == 'Get In Touch Table') {
    insertGetInTouchData();
}

function insertBookingData()
{
    global $conn, $bookingTable, $callingFunctionGet;
    // Create connection using musqli_connect function
    // Connection Check

    if (!$conn) {
        die("Connection failed: ");
    } else {
        ini_set("display_errors", 1);
        error_reporting(E_ALL);
        // $name = $_POST['Name'];
        // $email = $_POST['Email'];
        // $phone = $_POST['Phone'];

        // $message = $_POST['Message'];
        // $information = $_POST['Information'];
        // $subscriptionPlan = $_POST['SubscriptionPlan'];


        // $createdTimeStamp = $_POST['created'];
        // $expireTimeStamp = $_POST['expire'];

        // $paymentGateWay = $_POST['paymentGateWay'];
        // $paymentId = $_POST['paymentId'];
        // $orderId = $_POST['orderId'];
        // $signature = $_POST['signature'];
        // $payerEmail = $_POST['payerEmail'];


        // //insert query
        // $qu = "INSERT INTO $bookingTable( `Email`, `FullName`, `PhoneNumber`, `Address`, `Information`, `SubscriptionPlan`, `IsAdded`, `Created`, `Expire`, `IsExpired`, `paymentGateWay`, `paymentId`, `orderId`, `signature`, `payerEmail`,`IsHide`) 
        // VALUES ( '$email','$fullName','$phoneNumber','$address','$information','$subscriptionPlan', 0, '$createdTimeStamp', '$expireTimeStamp',0, '$paymentGateWay','$paymentId','$orderId','$signature','$payerEmail' , 0 )";
        // //query execution
        // if ($conn->query($qu) === TRUE)
        //     echo "Inserted Successfully " .  $callingFunctionGet ;
        // else echo "Insert Failed data" . $conn->error;


        $conn->close();
    }
}

function insertGetInTouchData()
{
    global $conn, $getInTouchTable;
    // Create connection using musqli_connect function
    // Connection Check

    if (!$conn) {
        die("Connection failed: ");
    } else {
        ini_set("display_errors", 1);
        error_reporting(E_ALL);

      
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $message = $_POST['Message'];
        $created = $_POST['Created'];
       
        //insert query
        $qu = "INSERT INTO $getInTouchTable( `Name`, `Email`, `Phone`, `Message`,`Created`) 
        VALUES ( '$name','$email','$phone','$message','$created')";

        //query execution
        if ($conn->query($qu) === TRUE)
        echo "Successfull";
        else echo "Insert Failed data" . $conn->error;
    }
    $conn->close();
}