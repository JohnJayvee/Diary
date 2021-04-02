<?php
session_start();
include 'perfect_function.php';
// get the id
$diaryId = $_GET['diaryId'];

// delete the row in the db
delete($diaryId, 'diary');

// notify and redirect 
$_SESSION['deleted'] = 1;
header('location: dashboard.php');
