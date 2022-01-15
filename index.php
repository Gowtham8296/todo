<?php
include("database.php");
if (isset($_SESSION['username'])) {
    header("Location: todo.php");
}
?>
<html>
<div class="card" style="width: 33rem;">

    <p class="card-text">Register before login.</p>
    <a href="Register.php" class="btn btn-primary">register</a>&nbsp;&nbsp;
    <a href="login.php" class="btn btn-primary">Login</a>


</div>
</div>


<!-- login -->


</html>