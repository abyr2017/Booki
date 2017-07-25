<?php
session_start();
$user_id=$_SESSION['id'];
$book_id=$_POST['book_id'];
$rate=$_POST['rate'];
$db = mysqli_connect('35.160.127.179','fake','true7102','fake');
$db->query("INSERT INTO `rate`(`id`, `user_id`, `book_id`, `rate`) VALUES (Null,'$user_id','$book_id','$rate')")

?>
