<?php
//ends everything
session_start();
session_unset();
session_destroy();
//sends you to front page
header("location: ../../../index.php");
exit();
?>