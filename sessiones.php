<?php
session_start();
$_SESSION["session_id"] = 1;
$_SESSION["session_nombre"] = "Angel";
echo $_SESSION["session_nombre"];
session_destroy();
?>