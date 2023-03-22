<?php

if(isset($_POST['submit_info'])) {
    $fist_name_error = "";
    $last_name_error = "";
    $email_error = "";
    $subject_error = "";
    $message_error = "";
    $success_message = "";

    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    $is_errors = false;

    
    if (empty($first_name)) {
        $first_name_error = "<p class='error'>Please enter your first name!</p>";
        $is_errors = true;
    } else {
        $first_name_error = "";    
    }

    if (empty($last_name)) {
        $last_name_error = "<p class='error'>Please enter your last name!</p>";
        $is_errors = true;
    } else {
        $last_name_error = "";    
    }
    
    if (empty($email)) {
        $email_error = "<p class='error'>Please enter your email!</p>";
        $is_errors = true;
    } else if (!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email)) {
        $email_error = "<p class='error'>Please enter a valid email!</p>";
        $is_errors = true;   
    }
  
    if (empty($subject)) {
        $subject_error = "<p class='error'>Please enter a subject!</p>";
        $is_errors = true;    
    } 

    if (empty($message)) {
        $message_error = "<p class='error no_message'>Please enter a message!</p>";
        $is_errors = true;  
    } 

    if (!$is_errors) {
        insert_contact_info($first_name, $last_name, $email, $subject, $message); 
        $success_message = "<p class='success'>Your infomation has been successfully logged</p>"; 

    } else {
        $success_message = "";
    } 
} 



function insert_contact_info($first_name, $last_name, $email, $subject, $message) {
    include("connection.php");

    try {
        $sql = "INSERT INTO contact_info 
            (first_name, last_name, email, subject, message) 
            VALUES (?, ?, ?, ?, ?)";
        $results = $db->prepare($sql);
        $results->bindParam(1,$first_name,PDO::PARAM_STR);
        $results->bindParam(2,$last_name,PDO::PARAM_STR);
        $results->bindParam(3,$email,PDO::PARAM_STR);
        $results->bindParam(4,$subject,PDO::PARAM_STR);
        $results->bindParam(5,$message,PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo $e->getMessage();
        echo "Query Failed";
        return false;
    }
    
}