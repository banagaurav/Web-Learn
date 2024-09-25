<form name="loginForm" method="POST" action="./formSubmit.php">
    <div>
        Username:<input type="text" name="username" id="username">
        Password:<input type="password" name="password" id="password">
    </div>
    <div>
        <input type="submit" name="login" value="login">
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    print $_POST['username'] . "and" . $_POST['password'];
}
?>