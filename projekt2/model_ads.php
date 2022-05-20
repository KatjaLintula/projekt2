<?php
$ads=[];
$sql = "SELECT username, fullname,aboutme, salary, email, city, likes FROM soulm8";
$stmt = $conn->query($sql);

if (isset($_REQUEST['adlikes'])) {
    unset($_REQUEST['adsalary']);
    $sql = "SELECT * FROM soulm8 ORDER BY likes DESC";
    foreach($conn->query($sql) as $ad){
        array_push($ads,$ad);
    }
} else if (isset($_REQUEST['adsalary'])) {
    unset($_REQUEST['adlikes']);
    $sql = "SELECT * FROM soulm8 ORDER BY salary DESC";
    foreach($conn->query($sql) as $ad){
        array_push($ads,$ad);
    }
} else if (isset($_REQUEST['adlikes']) || isset($_REQUEST['adsalary'])) {
    $sql = "SELECT * FROM soulm8 ORDER BY salary DESC, likes DESC ";
    foreach($conn->query($sql) as $ad){
        array_push($ads,$ad);
    }
} else {
    foreach($conn->query($sql) as $ad){
        array_push($ads,$ad);
    }
}

?>