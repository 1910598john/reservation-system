<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "admin";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: ".$connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT username, password FROM user";
$res = $conn->query($sql);
$error = "";
if ($res->num_rows > 0) {
    
    $success = false;
    while ($row = $res->fetch_assoc()) {
        if ($row['username'] == $username && $row['password'] == $password) {
            $success = true;
        } elseif ($row['username'] == $username && $row['password'] != $password) {
            $error = 'Incorrect password.';
        } else {
            $error = "Account doesn't exist.";
        }
    }
    $_SESSION['error'] = $error;
    if ($success === false) {
        header('Location: http://localhost/projects/reservation/');
    } else {
        header('Location: http://localhost/projects/reservation/system_management/');
    }
}

$conn->close();
?>