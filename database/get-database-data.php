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

$callFun = $_GET['CallFunction'];
if ($callFun == 'DataCount') {
    getAllDataCount();
} elseif ($callFun == 'DataTable') {
    getAllDataTable();
}



function getAllDataCount()
{
    global $conn, $bookingTable, $getInTouchTable;

    // Connection Check
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    if (!$conn) {
        die('Connection failed here: ');
    } else {

        $result = mysqli_query(
            $conn,
            "SELECT COUNT(*) AS `count` FROM $bookingTable"
        );
        $row = mysqli_fetch_array($result);
        $bookingCount = $row['count'];

        $result = mysqli_query(
            $conn,
            "SELECT COUNT(*) AS `count` FROM $getInTouchTable"
        );
        $row = mysqli_fetch_array($result);
        $getInTouchCount = $row['count'];


        echo $bookingCount .
            ',' .
            $getInTouchCount;
    }
    $conn->close();
}

function getAllDataTable()
{
    global $conn, $bookingTable, $getInTouchTable;
    // Connection Check
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    if (!$conn) {
        die('Connection failed here: ');
    } else {
        $dataName = $_GET['DataName'];

        switch ($dataName) {
            case 'Booking Table':
                $result = mysqli_query(
                    $conn,
                    "SELECT * FROM $bookingTable "
                );
                break;
            case 'Get In Touch Table':
                $result = mysqli_query(
                    $conn,
                    "SELECT * FROM $getInTouchTable "
                );
                break;
        }
        if (
            $dataName == 'Booking Table'
        ) {
            

            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo "<td>" . $row['ID'] . '</td>';
                echo "<td>" . $row['Name'] . '</td>';
                echo "<td>" . $row['Email'] . '</td>';
                echo "<td>" . $row['Phone'] . '</td>';
                echo "<td>" . $row['NumberOfPerson'] . '</td>';
                echo "<td>" . $row['Location'] . '</td>';
                echo '</tr>';
            }
           
           
        } else {
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo "<td data-th='ID'>" . $row['ID'] . '</td>';
                echo "<td data-th='Name'>" . $row['Name'] . '</td>';
                echo "<td data-th='Email'>" . $row['Email'] . '</td>';
                echo "<td  data-th='Phone'>" . $row['Phone'] . '</td>';
                echo "<td data-th='Message'>" . $row['Message'] . '</td>';
                echo '</tr>';
            }
        }
    }
    $conn->close();
}
