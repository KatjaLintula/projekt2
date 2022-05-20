<?php
$sender = test_input($_SESSION['userid']);
$comment = test_input($_REQUEST['comment']);
$reciever = test_input($_REQUEST['reciever_id']);
$_SESSION['reciever_id'] = $reciever;

if (!empty($_REQUEST['comment'])) {
    $profile = test_input($_REQUEST['reciever']);
    $sql= "INSERT INTO comments (sender, comment, reciever) 
    VALUES (?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$sender,$comment,$reciever]);

} else { 
    $profile = test_input($_REQUEST['ad']);  
}

$sql = "SELECT id, username, fullname,aboutme, likes FROM soulm8 WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$profile]);
$ad = $stmt->fetch(PDO::FETCH_ASSOC);

$likereciever = $ad['id'];

if(isset($_REQUEST['like'])) {
    $sql = "UPDATE soulm8 SET `likes` = `likes` +1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$likereciever]);
}


?>