<?php
//Written by Auke Scheepstra
// Logout script
$title = 'Logging out... | Cosmic Productions';
$pagetype = 'misc';
include 'header.php';
include 'nav.php';
echo 'Logging out...';
unset($_SESSION['user'], $_SESSION['admin']);
include 'footer.php';
header('Refresh: 1; url=/cosmic')?>