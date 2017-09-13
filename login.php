<?php
// Written by Auke Scheepstra
// Login validation
session_start();
include 'opendb.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') // Check if form was sent
{
	$stmt = $db->prepare('SELECT password FROM users WHERE username=?');
	$stmt->bindValue(1, $_POST['username'], PDO::PARAM_STR);
	$stmt-> execute();
	$result = $stmt->fetch(PDO::FETCH_NUM);

	if(password_verify($_POST['password'], $result[0])){	// Verify password
		$_SESSION['user'] = $_POST['username'];
		$stmt = $db->prepare('SELECT admin FROM users WHERE username=?');
		$stmt->bindValue(1, $_POST['username'], PDO::PARAM_STR);
		$stmt-> execute();
		$result = $stmt->fetch(PDO::FETCH_NUM);
		$_SESSION['admin'] = $result[0];

		if (password_needs_rehash($result[0], PASSWORD_DEFAULT)) {	// Password rehash
			$newHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$stmt = $db->prepare('INSERT INTO users (username, password, admin) VALUES (?, ?, ?)');
			$stmt->bindValue(1, $_POST['username'], PDO::PARAM_STR);
			$stmt->bindValue(2, $newHash, PDO::PARAM_STR);
			$stmt->bindValue(3, $_SESSION['admin'], PDO::PARAM_STR);
			$stmt->execute();
		}
		header('Refresh: 3; url=/cosmic');
		echo 'Je bent succesvol ingelogd. Je wordt doorgestuurd.';	// Success!
	}
	else
	{
		header('Refresh: 10; url=admin-login');
		echo 'Deze combinatie van gebruikersnaam en wachtwoord is niet juist!';	// Error message
	}
}
else
{
	header('Location: admin-login'); // Return to login form
	exit();
}
?> 