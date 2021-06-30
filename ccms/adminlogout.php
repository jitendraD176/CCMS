<?php
session_start();
unset($_SESSION["id1"]);
header("Location:index.html");
?>