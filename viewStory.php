<?php include "includes/header.php"; ?>
<?php include "perfect_function.php"; ?>
<?php middleware() ?>
<?php
//get information about the story 
$diaryId = $_GET['diaryId'];

// perform get request to the server 
$diaryInfo = getWhere('diary', 'id', $diaryId);
?>
<div style="margin-bottom:20px"></div>
<h1>View Your Story</h1>
<a href="dashboard.php"><button class="btn btn-primary btn-sm">Back</button></a>
<br>
<br>
<h1><u><?= $diaryInfo[0]['subject'] ?></u></h1>
<br>
<p><?= $diaryInfo[0]['story'] ?></p>



<?php include "includes/footer.php"; ?>