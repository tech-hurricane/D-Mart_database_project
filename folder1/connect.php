<?php
$conn = new mysqli('localhost', 'root', '', 'd_mart');

if(!$conn)
{
    die(mysqli_error($conn));
}
?>