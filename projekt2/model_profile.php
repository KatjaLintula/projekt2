<?php

$username = $_SESSION['username'];
$updateemail = $_REQUEST['email'];
$updatecity = $_REQUEST['city'];
$updatename = $_REQUEST['fullname'];
$updatead = $_REQUEST['ad'];

$sql = "SELECT id,username, fullname, aboutme, email, city FROM soulm8 WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$username]);
$ad = $stmt->fetch(PDO::FETCH_ASSOC);

$sql= "UPDATE soulm8 SET fullname = ?, email =?, city = ?, aboutme = ? WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$updatename,$updateemail,$updatecity,$updatead,$username]);



$comment_reciever = $ad['id'];
$sql = "SELECT soulm8.id, soulm8.username, comments.id, comments.sender, comments.comment, comments.reciever FROM soulm8 INNER JOIN comments ON soulm8.id=comments.sender WHERE comments.reciever = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$comment_reciever]);
$comments = $stmt->fetch(PDO::FETCH_ASSOC);
$user= $comments['username'];
$kommentar = $comments['comment']
?>