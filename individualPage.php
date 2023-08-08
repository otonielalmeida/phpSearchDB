<?php
include "./DBcontroller.php";
$connection = mysqli_connect('localhost', 'root', '', 'search_bar_exercise');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = database::execSQL("SELECT * FROM entries WHERE id = $id");
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

</body>

</html>