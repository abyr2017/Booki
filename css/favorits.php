<?php
session_start();
$user_id=$_SESSION['id'];
$book_id=$_POST['book_id'];

$db = mysqli_connect('35.160.127.179','fake','true7102','fake');
$db->query("INSERT INTO `favoris`(`user_id`, `book_id`) VALUES ('$user_id','$book_id')");
echo true;

?>
