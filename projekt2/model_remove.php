<?php

$sql = "SELECT password FROM soulm8 WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$username]);
$profile = $stmt->fetch(PDO::FETCH_ASSOC);
$databasehash = hash("sha256", $profile['password']);

$verification = test_input($_REQUEST['password']);
$inputhash = hash("sha256", $verification);
if ($inputhash == $databasehash) {
    $sql = "DELETE FROM soulm8 WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    print('Din profil är raderad!');
    session_destroy();
} else {
    print("Fel lösenord!");
}

?>