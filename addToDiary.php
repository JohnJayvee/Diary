<?php include "includes/header.php"; ?>
<?php include "perfect_function.php" ?>

<div style="margin-bottom:20px"></div>

<h1>Add notes to diary</h1>
<div class="row">
    <a href="dashboard.php"><button class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i>&nbsp;Back</button></a>
</div>
<br>
<div class="form-group">
    <?php successNotif('diaryAdded', 'Story added to diary'); ?>
</div>
<br>
<form action="addToDiaryProc.php" method="post">
    <div class="form-group">
        <label for="">Subject</label>
        <input type="text" name="subject" placeholder="What is your story all about?" id="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Notes</label>
        <textarea name="story" class="form-control" id="" cols="30" rows="10" placeholder="Enter your story here"></textarea>
    </div>

    <button class="btn btn-success col-md-12" type="submit" name="submit">Add to diary</button>
</form>
<?php include "includes/footer.php"; ?>