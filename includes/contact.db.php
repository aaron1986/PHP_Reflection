<?php

include ('connection.php');


if(isset($_POST["submit"])) {
    $user_name = $_POST['name'];
    $user_company = $_POST['company'];
    $user_email= $_POST['email'];
    $user_telephone = $_POST['telephone'];
    $user_subject = $_POST['subject'];
    $user_message = $_POST['message'];
    $checkbox_contact = $_POST['checkbox_contact'];

    function emptyInput($user_name, $user_company, $user_email, $user_telephone, $user_subject, $user_message) {
        $result;
        if(empty($user_name) || empty($user_company) || empty($user_email) || empty($user_telephone) || empty($user_subject) || empty($user_message)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    if(emptyInput($user_name, $user_company, $user_email, $user_telephone, $user_subject, $user_message) !== false){
        $name_error = "invalid";
    } 

    function emptycheckbox($checkbox_contact) {
        $result;
        if(empty($checkbox_contact)) {
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

    if(emptyInput($user_name, $user_company, $user_email, $user_telephone, $user_subject, $user_message) !== false) {
        //header('location: ../contact_page.php');
    } 


    if(invalidEmail($user_email) !== true) {
        //header('location: ../contact_page.php');
    }
    
    $sql = $connection_contact -> prepare("SELECT * FROM users WHERE user_email = '".$user_email."'; ");
    $sql -> execute([$user_email]);
    $result = $sql -> rowCount();
    if($result > 0) {
        //header('location: ../contact_page.php');
    }

    if(emptycheckbox($checkbox_contact) !== false) {
        //header('location: ../contact_page.php');
    } else {
        header('location: ../contact_page.php');
            $query_contact = "INSERT INTO users (name, company_name, user_email, telephone_num, subject, message) VALUES (:name,:company_name, :user_email, :telephone_num, :subject, :message)";
            $query_run = $connection_contact -> prepare($query_contact);
            $data_contact = [':name' => $user_name, ':company_name' => $user_company, ':user_email' => $user_email, ':telephone_num' => $user_telephone, ':subject' => $user_subject, ':message' => $user_message];
            $query_execute_contact = $query_run -> execute($data_contact);
    }


    
}