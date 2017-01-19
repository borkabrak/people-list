<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Toy People Tracker</title>

    <script src="people.js"></script>

</head>

<?php
    // Initialize session functionality.
    session_start();

    // Clear session and reload, if so instructed.
    if ( isset($_GET['clear_session']) ) {
        session_destroy();
        header("Refresh:0; url=people.php"); // reload page immediately
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

    <!-- Form for adding a new entry -->
    <form method="post">
        <label>First Name</label> 
        <input name="firstname">

        <label>Last Name</label>
        <input name="lastname">

        <br>

        <input type="submit">
        <input type="button" name="clear_session" value="Clear Session" onclick="confirm_clear_session()">
    </form>
    </div>

</body>
</html>
