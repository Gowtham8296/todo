<?php
include('database.php');
$achieved = null;
$problems = null;

if (isset($_POST['submit'])) {
    $description = $_POST['todo'];
    $username = $_SESSION['username'];
    $description = mysqli_real_escape_string($conn, stripslashes($description));
    if ($description) {
        $conclude = "INSERT INTO work (description,username) values ('$description','$username')";
        $result = mysqli_query($conn, $conclude);

        if ($result) {
            $achieved = "work added";
        } else {
            $problems = "work not added something went wrong";
        }
    } else {
        $problems = "Sorry! to add the work !!add decription";
    }
}
?>

<form method='POST' action="todo.php">
    <h2>TODO WORK</h2>

    <div class="mb-3">
        <label class="form-label">todo</label>
        <input name='todo' type="text" class="form-control" id="username" aria-describedby="usernamehelp">
    </div><br />


    <button name='submit' type="submit" class="btn btn-primary">Submit</button><br />

    <a href="index.php">logout</a><br />
    <h2>Want to see all work </h2>
    <a href="review.php">Show all work's</a>
</form>
<?php if ($achieved != null) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $achieved; ?>
    </div>
<?php endif ?>
<?php if ($problems != null) : ?>
    <div class="alert alert-success" role="alert">
        <?php echo $problems; ?>
    </div>
<?php endif ?>