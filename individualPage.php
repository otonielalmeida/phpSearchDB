<?php
include "./DBcontroller.php";
include "./includes/db.php";
$connection = mysqli_connect('localhost', 'root', '', 'search_bar_exercise');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    /* $result = database::execSQL("SELECT * FROM entries WHERE id = $id"); */
    /* return $result; */
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/individualPage.css" />
    <title>Document</title>
</head>

<body>
    <?php

    $query = "SELECT * FROM entries WHERE id = $id";
    $select_entry_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_entry_query)) {
        $title = $row['title'];
        $text = $row['text'];
    }
    ?>
    <main>
        <div>
            <h1>
                <?php
                echo $title;
                ?>
            </h1>
            <h3>
                <?php
                echo $text;
                ?>
            </h3>
        </div>
    </main>
</body>

</html>