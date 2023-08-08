<?php
include "./DBcontroller.php";
$connection = mysqli_connect('localhost', 'root', '', 'search_bar_exercise');
if (isset($_GET['search'])) {
    $query = $_GET['search'];
    $result = database::execSQL("SELECT * FROM entries WHERE title LIKE '%$query%' OR text LIKE '%$query%'");
    return $result;
}
