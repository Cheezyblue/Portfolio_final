<?php

    // 1.  Include functions
	require_once("../partials/functions.php");
    // 2.  Include connection to the database
    require_once("connect.php");
   
    // create variable and retrieve the information from the sign up form using the POST method
    $user_email = $_POST['visitor_email'];
    $user_name = $_POST['visitor_name'];
    $title = $_POST['email_title'];
    $user_message = $_POST['visitor_message'];


    // once all the checks are in and if there aren't any problems we will create a new user
    // Insert the information into the users table values email and password
    $sql = "INSERT INTO contact_info (email, title, user_message, username) VALUES (?, ? ,?, ?)";
    //preparing a new sql statement
    $stmt = $connection->prepare($sql);

    // binding the parameters to the values above
    $stmt->bind_param("ssss", $user_email, $title, $user_message, $user_name);
    $stmt->execute();

    //redirect back to the sign-up with the new_user check
    header("Location: " . SITE_URL . "?type=success");