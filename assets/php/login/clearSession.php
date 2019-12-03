<?php
    session_name("dotQuiet");
    session_start();
    session_destroy();
    header("Location: index.php");
?>