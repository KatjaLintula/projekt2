<?php 

$username = test_input($_REQUEST['user']); 
$sql = "SELECT id, username FROM soulm8 WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$username]);
$loginprofile = $stmt->fetch(PDO::FETCH_ASSOC);

$_SESSION['username'] = test_input($_REQUEST['user']);
$_SESSION['userid'] = $loginprofile['id'] ;

if (!empty($_SESSION['userid'])) {
    print("Loggar in som: ".test_input($_REQUEST ['user']));
}

?>