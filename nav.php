<?php
// Written by Auke Scheepstra
// Basic nav
session_start();?>
<ul id="nav-container">
	<a href="/cosmic"><img id="nav-logo" src="img/logo.png"></a>
	<a href="radio"><li class="nav-item">Radio</li></a>
	<a href="archive"><li class="nav-item">Archives</li></a>
	<?php 
		if(!empty($_SESSION['admin'])){
			echo '<li class="nav-admin nav-item">'.
				$_SESSION['user'].
				'<ul class="nav-dropdown">
					<a href="logout"><li class="nav-dropdown-item">Logout</li></a>
					<a href="admin-new-item"><li class="nav-dropdown-item">Custom Entry</li></a>
					<a href="#"><li class="nav-dropdown-item">Edit Website</li></a>
				</ul>
			</li>';
		}
		else if(isset($_SESSION['user'])){
		echo '<li href="logout" class="nav-item">Logout</li>';
	} else {
		echo '<a href="admin-login"><li class="nav-item">Login/Sign Up</li></a>';
	}?>
</ul>
<div id="header"><h1>Home</h1></div>