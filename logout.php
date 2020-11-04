<?php
session_start();
session_destroy();
// Redirecting to the Landing page:
header('Location: index.php');
?>