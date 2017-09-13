<?php
// Written by Auke Scheepstra
// Basic showcase with menu, footer and dummy text$title = 'Templar Demo';
$title = 'Cosmic Productions';
$pagetype = 'index';
include 'header.php';
include 'nav.php';
echo '<div id="lipsum">';
include 'lipsum.php';
echo '</div>';
include 'footer.php'?>