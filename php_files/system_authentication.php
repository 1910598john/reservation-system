<?php
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

if ($res->num_rows > 0) {
    $confirmed = false;
    while ($row = $res->fetch_assoc()) {
        if ($row['username'] == $username && $row['password'] == $password) {
            $confirmed = true;
        }
    }
    if ($confirmed === false) {
        header('Location: http://localhost/projects/reservation/');
    }
    else {
        header('Location: http://localhost/projects/reservation/system_management/');
    }
}

$conn->close();
?>