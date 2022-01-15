<?php
include('database.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    $password = $_POST['password'];
    $username = mysqli_real_escape_string($conn, stripslashes($username));
    $password = mysqli_real_escape_string($conn, stripslashes($password));
    $conclude = "SELECT * from users where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $conclude);
    $row = mysqli_fetch_assoc($result);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = $row['username'];

        header('Location: todo.php');
    } else {
        echo "Username or password is incorrect";
    }
}
?>

<form method='POST' action="login.php">
    <h2>login</h2>
    <a href="index.php">Want to register</a>
    <div class="mb-3">
        <label class="form-label">username</label>
        <input name='username' type="text" class="form-control" id="username" aria-describedby="usernamehelp">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input name='password' type="text" class="form-control" id="id_Password">
    </div>

    <button name='submit' type="submit" class="btn btn-primary">Submit</button>
</form>