
header('location:'.getenv("HTTP_REFERER")); 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="task1";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
header("Location: panel.html");
?>

 
 <?php 

if (isset($_POST['off'])) {

$sql = " UPDATE `robot_arm` SET `arm1`='0' , `arm2`='0', `arm3`='0', `arm4`='0', `arm5`='0', `arm6`='0', `start`='0' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>
 <?php 

if (isset($_POST['on'])) {

$sql = " UPDATE `robot_arm` SET `start`='1' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>



 <?php 

if (isset($_POST['Send'])) {
$sql = " UPDATE `robot_arm` SET `arm1`='".$_POST['range1']."' , `arm2`='".$_POST['range2']."', `arm3`='".$_POST['range3']."', `arm4`='".$_POST['range4']."', `arm5`='".$_POST['range5']."', `arm6`='".$_POST['range6']."' WHERE `ID`=1";
$result = $conn->query($sql);
 }

 ?>

