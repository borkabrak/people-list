<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toy People Tracker</title>
</head>

<?php

    //Read parameters

    $list = $_POST;

?>

<body>
    <h1>People</h1>

    <div class="add">
        <form method="post" id="add">

            <label for="FirstName">First Name
            <input name="FirstName"></input></label>

            <label for="LastName">Last Name
            <input name="LastName"></input></label>

            <input type="submit"></input>
        </form>
    </div>

    <div class="list">

    <label>First Name</label> 
    <span class="output"><?= $firstname ?></span>

    <label>Last Name</label>
    <span class="output"><?= $lastname ?></span>

    </div>

</body>
</html>
