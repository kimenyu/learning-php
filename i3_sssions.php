<?php
    session_start();
    if(isset($_POST["submit"])) {
        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);

        $password = $_POST['password'];

        if($username == 'John' && $password == 'password') {
            $_SESSION['username'] = $username;
            header('Location: ../extras/dashboard.php');
        } else {
            echo 'Incorrect login';
        }
    }
    echo''.$username.''.$password.'';
?>
<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>

    <div>
        <label for="password">Password: </label>
        <input type="text" name="password">
    </div>

    <input type="submit" value="Submit" name="submit">
</form>