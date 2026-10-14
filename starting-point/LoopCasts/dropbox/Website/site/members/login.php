<?php
// members area - Jens, summer 2019
// TODO: clean this up before I leave
session_start();
$db = mysqli_connect("localhost", "loopcasts_web", "Loopcasts2019!", "loopcasts_members");

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $pass  = md5($_POST['password']);
    $sql   = "SELECT * FROM users WHERE email = '$email' AND password = '$pass' AND active = 1";
    $res   = mysqli_query($db, $sql);
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['user'] = $email;
        header("Location: index.php");
        exit;
    } else {
        $error = "Wrong e-mail or password";
    }
}
?>
<html><body>
<h1>Members login</h1>
<?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
<form method="post">
  E-mail: <input name="email"><br>
  Password: <input name="password" type="password"><br>
  <input type="submit" value="Log in">
</form>
</body></html>
