<?php include "includes/header.php"; ?>
<?php include "perfect_function.php"; ?>


<div class="mt-5 marginBottom"></div>


<!-- Notifications -->
<?php notification('wrongPassword', 'Incorrect password'); ?>

<h1>Daily Diary Login</h1>
</div>

<div align="center" id="loginDiv">
    <form action="loginProc.php" method="POST" id="loginForm" class="col-md-6">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" placeholder="Username" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control">
        </div>
        <button class="btn btn-success login" name="submit" type="submit">Login</button>

    </form>
</div>
<div id="stepBro" style="display:none">
    <img src="https://i.ytimg.com/vi/tCTArDH9-t4/maxresdefault.jpg" alt="step bro">
</div>

<?php include "includes/footer.php"; ?>