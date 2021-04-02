<?php include "includes/header.php"; ?>
<?php include "perfect_function.php"; ?>
<?php middleware() ?>

<div style="margin-bottom:20px"></div>
<h1>Welcome to dashboard</h1>


<a href="addToDiary.php"><button class="btn btn-success btn-sm"><i class="fas fa-plus"></i>&nbsp;Add to diary</button></a>
<a href="logoutProc.php"><button class="btn btn-success btn-outline-dark btn-sm"><i class="fas fa-power-off"></i></button></a>

<?php
//get the stories of the user
// $userId = getUserId();
$diaryTable = getWhere('diary', 'user_id', $_SESSION['credentialsId']);
notification('deleted', 'Story deleted'); // if the session is detected it will display a message
successNotif('updated', 'Update story successfully'); // if the session is detected it will display a message
?>

<div class="table responsive mt-4">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>#</td>
                <td>Subject</td>
                <td>Story</td>
                <td>Date</td>
                <td>Time</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 0 ?>
            <?php foreach ($diaryTable as $row) { ?>
                <?php $counter++; ?>
                <tr align="center">
                    <td><?= $counter ?></td>
                    <td><?= $row['subject'] ?></td>
                    <?php
                    $diaryId = $row['id'];
                    $view = "viewStory.php?diaryId=$diaryId";
                    ?>
                    <td><a href="<?= $view ?>"><button class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></button></a></td>
                    <td><?= $row['date'] ?></td>
                    <td><?= $row['time'] ?></td>
                    <td style="display:flex">
                        <?php
                        $diaryId = $row['id'];
                        $update = "updateDiaryProc.php?diaryId=$diaryId";
                        $delete = "deleteDiaryProc.php?diaryId=$diaryId";
                        ?>
                        <a href="<?= $update ?>"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
                        <a href="<?= $delete ?>"><button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include "includes/footer.php"; ?>