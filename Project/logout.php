<?php
Session_start();
session_destroy();
header('Location: index.html');
exit();
?>