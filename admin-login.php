<?php
// Written by Auke Scheepstra
// Basic login form
$title = 'Login | Cosmic Productions';
$pagetype = 'form';
include 'header.php';
include 'nav.php';?>
<form>
	First name:<br>
	<input type="text" name="firstname"><br>
	Last name:<br>
	<input type="text" name="lastname"><br>
	E-mail:<br>
	<input type="text" name="email"><br>
	Password:<br>
	<input type="password" name="password"><br>
	Refferer:<br>
	<select name="refferer">
		<option>Online Ad</option>
		<option>Social Media</option>
		<option>Word of Mouth</option>
	</select><br><br>
	<input type="submit" value="Create Account">
</form>
<?php include 'footer.php'?>