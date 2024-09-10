<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iotnewdb";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

date_default_timezone_set("Asia/Kolkata");
$date_curr = date('Y-m-d');
$time_curr = date('h:i:sa');

if (!empty($_GET['fireupdate']) && !empty($_GET['nodeid'])) {
    $sensorData1 = (int)$_GET['fireupdate'];
    $nodeid = (int)$_GET['nodeid'];

    $sql = "UPDATE fireupdate_tab SET firedet = ?, fdate = ?, ftime = ? WHERE nodeid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issi", $sensorData1, $date_curr, $time_curr, $nodeid);

    if ($stmt->execute()) {
        echo $sensorData1;
    } else {
        echo "Error: " . $stmt->error;
    }

    if ($sensorData1 == 2) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot6712935072:AAGexuvytwRqGhKBKd8dhPD_GOgCI3Rx_7U/sendMessage?chat_id=5530002491&text=Fire%20detected");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // to capture the response
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $response = curl_exec($ch);
        if ($response === false) {
            echo 'Curl error: ' . curl_error($ch);
        } else {
            echo 'Curl response: ' . $response;
        }

        curl_close($ch);
        echo "1";
    }
    $stmt->close();
}

$conn->close();
?>