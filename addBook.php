<?php
session_start();
$db = mysqli_connect('35.160.127.179','fake','true7102','fake');
$user_id=$_SESSION['id'];
$book_id=$_POST['book_id'];
$result = $db->query ("SELECT * FROM BookShelf WHERE id=$book_id");
$row = $result->fetch_array(); 
$owner_id = $row['owner'];
$db->query("UPDATE `BookShelf`  SET client=$user_id WHERE id =$book_id");
$db->query("UPDATE `Users` SET `books token`=(`books token`+1) WHERE `id` = $user_id");
$db->query("UPDATE `Users` SET `Books given`=(`Books given`+1) WHERE `id` = $owner_id");
echo true;
?>
