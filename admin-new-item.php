<?php
// Written by Auke Scheepstra
// Basic form for inserting new entries into a database
$title = 'New Item | Templar Demo';
$pagetype = 'form';
include 'header.php';
include 'nav.php';?>
<form action="new-item.php" enctype="multipart/form-data"  method="POST">
	<input id="name" type="text" name="name" placeholder="Name" />
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
	<input id="image" type="file" name="image">
	<input id="vertices" type="number" name="vertices" placeholder="vertices" />
	<input id="submit" type="submit" value="Submit" />
</form>
<?php include 'footer.php'?>