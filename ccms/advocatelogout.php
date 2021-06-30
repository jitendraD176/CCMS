<?php
session_start();
unset($_SESSION["id2"]);
header("Location:index.html");
?>