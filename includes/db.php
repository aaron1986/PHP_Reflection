<?php
session_start();
include ('connection.php');

if(isset($_POST["submit"])) {
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $checkbox = $_POST['checkbox'];

    function emptyInput($user_name, $user_email) {
        $result;
        if(empty($user_name) || empty($user_email)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function emptycheckbox($checkbox) {
        $result;
        if(empty($checkbox)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($user_email) {
        $result;
        if(filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    } 

    if(emptyInput($user_name, $user_email) !== false){
        $_SESSION['empty_status'] = "";
        header('location: ../index.php');
    } 

    

    if(invalidEmail($user_email) !== true) {
        $_SESSION['email_status'] = "";
        header('location: ../index.php');
    }

    
    $sql = $connection -> prepare("SELECT * FROM users WHERE user_email = '".$user_email."'; ");
    $sql -> execute([$user_email]);
    $result = $sql -> rowCount();
    if($result > 0) {
        $_SESSION['exists_status'] = "";
        header('location: ../index.php');
    } 
    if(emptycheckbox($checkbox) !== false) {
        $_SESSION['checkbox_status'] = "";
        header('location: ../index.php');
    } else {
    $_SESSION['status'] = "";
    header('location: ../index.php');
    $query = "INSERT INTO users (user_name, user_email) VALUES (:name, :email)";
    $query_run = $connection -> prepare($query);
    $data = [':name' => $user_name, ':email' => $user_email];
    $query_execute = $query_run -> execute($data);
}

   
} //end of isset function




