<?php
session_start();
var_dump($_SESSION['content']);
session_destroy();
?>