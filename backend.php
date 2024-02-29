<?php

include "db_connect.php";

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


function Record($conn){
    $name = array();
    $age = array();
    $gender = array();
    $select  = mysqli_query($conn , "SELECT name, age, gender FROM passanger");
    if($select->num_rows > 0){
       while($row = $select->fetch_assoc()){

            $name[] = $row['name']; 
            $age[] = $row['age']; 
            $gender[] = $row['gender']; 
       }
    } else {
        return null;
    }
    $Length = count($name);
    
    for($i = 0 ; $i < $Length ; $i++ ){
        if(isset($name) && isset($gender) && isset($age) ){

            echo "<tr>";
            echo "<td >".$name[$i]."</td>";
            echo "<td>".$gender[$i]."</td>";
            echo "<td>".$age[$i]."</td>";
            echo "</tr><br>";
        }else{
            echo "<td>NO Data Found</td>";
        }
    }

}

function login($conn, $currentPass, $currentMail) {
    $sql = mysqli_query($conn, "SELECT email, password FROM login");
    $email = array();
    $password = array();
    if ($sql->num_rows > 0) {
        while ($row = $sql->fetch_assoc()) {
            $email[] = $row['email'];
            $password[] = $row['password'];
        }
        $length = count($email);
        for ($i = 0; $i < $length; $i++) {
            if ($currentMail == $email[$i] && $currentPass == $password[$i]) {
                return true; 
            }
        }
    }
    return false; 
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (login($conn, $password, $email)) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    } else {
        header("Location: login.php");
        exit;
    }
}




if(isset($_POST['record'])){
    header("location: record.php");
}

if(isset($_POST['save'])) {
    addData($conn);
}

if(isset($_POST['clear'])){
    clearData($conn);
}

?>