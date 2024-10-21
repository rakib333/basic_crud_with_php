<?php
$connection = new mysqli('localhost', 'root', '', 'crud');

if (!$connection) {
    die(mysqli_error($connection));
}
