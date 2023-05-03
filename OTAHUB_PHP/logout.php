<?php
session_start();
session_destroy();
header("Location: login.php");

session_start();
session_destroy();
header("Location: profile.php");

session_start();
session_destroy();
header("Location: community.php");
?>