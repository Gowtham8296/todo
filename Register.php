<?php
include('database.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($conn, stripslashes($username));
    $email = mysqli_real_escape_string($conn, stripslashes($email));
    $password = mysqli_real_escape_string($conn, stripslashes($password));



    $conclude = "INSERT INTO users (username,email,password) values('$username','$email','$password')";
    $result = mysqli_query($conn, $conclude);
    if ($result) {
        header('Location: login.php');
    } else {
        echo "error";
    }
} else {
    echo ("unable to submit");
}
?>
<form method='POST' action="register.php">
    <h2>register</h2>
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input name="username" type="text" class="form-control" id="id_Username" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name='email' type="text" class="form-control" id="id_Email1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name='password' type="text" class="form-control" id="id_Password">
    </div>

    <button name='submit' type="submit" class="btn btn-primary">Submit</button>
</form>