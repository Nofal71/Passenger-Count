<?php
$server = "localhost";
$username = "root"; 
$password = "";
$dbname = "PassangerCount"; 

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("Error: " . mysqli_connect_error());
}

function addData($conn){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    
    $result = mysqli_query($conn, "INSERT INTO passanger (name, gender, age) VALUES ('$name', '$gender', '$age')");
    
    if (!$result) {
        echo "Failed to insert data";
    } else {
        session_start();
        $_SESSION['count'] = isset($_SESSION['count']) ? $_SESSION['count'] + 1 : 1;
        header("Location: index.php"); 
        exit; 
    }
}

function clearData($conn){
    $result = mysqli_query($conn, "DELETE FROM passanger");
    if (!$result) {
        echo "Failed to delete data";
    } else {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php"); 
        exit; 
    }
}

if(isset($_POST['save'])) {
    addData($conn);
}

if(isset($_POST['clear'])){
    clearData($conn);
}
?>
