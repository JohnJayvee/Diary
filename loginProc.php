<?php
require "perfect_function.php";
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //find the account in the database
    $credentialsTable = get_where_custom('credentials', 'username', $username)->fetch_assoc();

    //fetch assoc converts $credentialsTable object into an associative array


    //get the password and credentials id
    $credentialsId = $credentialsTable['id'];
    $dbPassword = $credentialsTable['password'];

    //validate password
    if ($password == $dbPassword) {
        //set the credentials id to be loged in into the dashboard
        $_SESSION['credentialsId'] = $credentialsId;

        header('location: dashboard.php');
    } else {
        //hindi sila pareho

        $_SESSION['wrongPassword'] = 1; //just to activate the session
        header('location: index.php');
    }
}
