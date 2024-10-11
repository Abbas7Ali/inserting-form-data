<?php
require 'checking.php';

// sql to delete a record
$dele = "DELETE * FROM users";

$result = $conn->query($dele);


header("checking.php");
