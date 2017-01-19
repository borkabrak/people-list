<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toy People Tracker</title>
</head>

<?php
    // Initialize session functionality.
    session_start();

    // Clear session and reload, if so instructed.
    if (isset($_POST['destroy_session'])) {
        session_destroy();
        header("Refresh:0");
    }
    
    // Initialize data, if necessary.
    if (!isset($_SESSION['people'])) {
        $_SESSION['people'] = [];
    } 

    // Add the new person, if we have one.
    if ($_POST['firstname']) {
        array_push($_SESSION['people'], array(
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname']
        ));
    }

?>
<body>
    <h1>People</h1>

    <div>

    <!-- List people currently stored in the session -->
    <ul>
    <?php foreach($_SESSION['people'] as $person) { ?>
    <li><strong><?= $person['firstname'] . " " . $person['lastname'] ?></strong>
    <?php } ?>
    </ul>

        <form method="post">
            <label>First Name</label> 
            <input name="firstname">

            <label>Last Name</label>
            <input name="lastname">

            <br>

            <input type="submit">
            <input type="submit" name="destroy_session" value="Erase Data">
        </form>
    </div>

</body>
</html>
