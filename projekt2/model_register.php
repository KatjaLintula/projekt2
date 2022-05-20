<?php 
if (null !== $_REQUEST['submit']){
$newuser = test_input($_POST['newuser']);
$newfullname = test_input($_POST['newfullname']);
$newpassword = test_input($_POST['newpassword']);
$newad = test_input($_POST['newad']);
$newcity = test_input($_POST['newcity']);
$newsalary = test_input($_POST['newsalary']);
$newpreference = test_input($_POST['newpreference']);
$newemail = test_input($_POST['newemail']);


$sql = "INSERT INTO soulm8 (username, fullname, password, email,city,aboutme,salary,preference) 
VALUES (?,?,?,?,?,?,?,?);";
$stmt = $conn->prepare($sql);
$stmt->execute([$newuser,$newfullname,$newpassword, $newemail,$newcity,$newad,$newsalary,$newpreference]); 
$newprofile= $stmt->fetch(PDO::FETCH_ASSOC);
}

?>
