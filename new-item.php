<?php
// Written by Auke Scheepstra
// Inserts item into database
include 'opendb.php';

$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/templar/img/';
$imageFileType = pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
$uploadfile = $uploaddir . $_POST['name'] . '.' .  $imageFileType;
$uploadOk = 1;
// Check if image file is a actual image or fake image
move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
print_r($_FILES);
$stmt = $db->prepare('INSERT INTO polygons(id, name, image, vertices) VALUES (?,?,?,?)');
$stmt->bindValue(1, NULL, PDO::PARAM_STR);
$stmt->bindValue(2, $_POST['name'], PDO::PARAM_STR);
$stmt->bindValue(3, $_POST['name'].'.'.$imageFileType, PDO::PARAM_STR);
$stmt->bindValue(4, $_POST['vertices'], PDO::PARAM_STR);
$stmt->execute();