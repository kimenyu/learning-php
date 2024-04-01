<?php
    if(isset($_POST["submit"])) {
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
    }
    echo''.$name.''.$age.'';
?>
<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>

    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>

    <input type="submit" value="Submit" name="submit">
</form>