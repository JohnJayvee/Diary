<?php include "includes/header.php"; ?>
<?php include "perfect_function.php" ?>

<?php
$diaryId = $_GET['diaryId'];

$storyInfo = getWhere('diary', 'id', $diaryId);

// when the submit button is pressed perform sql 
if (isset($_POST['submit'])) {
    $update['subject'] = $_POST['subject'];
    $update['story'] = $_POST['story'];

    update($update, $diaryId, 'diary');

    // set session to notify the user
    $_SESSION['updated'] = 1;
    header('location: dashboard.php');
}
?>

<div style="margin-bottom:20px"></div>

<h1>Edit your story</h1>
<div class="row">
    <a href="dashboard.php"><button class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i>&nbsp;Back</button></a>
</div>
<br>
<div class="form-group">
    <?php successNotif('diaryAdded', 'Story added to diary'); ?>
</div>
<br>
<form action="" method="post">
    <div class="form-group">
        <label for="">Subject</label>
        <input type="text" name="subject" value="<?= $storyInfo[0]['subject'] ?>" placeholder="What is your story all about?" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Notes</label>
        <textarea name="story" class="form-control" id="" cols="30" rows="10" placeholder="Enter your story here"><?= $storyInfo[0]['story'] ?></textarea>
    </div>

    <button class="btn btn-success col-md-12" type="submit" name="submit">Update Story</button>
</form>
<?php include "includes/footer.php"; ?>