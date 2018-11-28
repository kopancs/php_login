<?php
session_start();
require_once ('connect.php');

$db->close();
session_destroy();
header('Location: index.php');



?>


