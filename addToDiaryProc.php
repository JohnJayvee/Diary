<?php
session_start();
include "perfect_function.php";

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $story = $_POST['story'];

    //get the user id of the person who is currently loged in 
    $userId = getUserId($_SESSION['credentialsId']);


    //insert into diary table
    $insert['user_id'] = $userId;
    $insert['subject'] = $subject;
    $insert['story'] = $story;
    $insert['date'] = date('Y-m-d');
    $insert['time'] = date('h:i:s a');
    $message = insert($insert, 'diary');

    //redirect and notify
    $_SESSION['diaryAdded'] = 1;
    header('location: addToDiary.php');
}
