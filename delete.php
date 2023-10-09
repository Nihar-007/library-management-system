<?php
session_start();
// $sno = $_SESSION['sno'];
$sno = $_GET['sno_delete'];
$conn = mysqli_connect('localhost','root','','miniproject');
$sql = "DELETE from `login` where `sno` = $sno";
$result = mysqli_query($conn,$sql);
echo $sno;
if($result){
    // echo "<script>alert('Deleted!');</script>";
    header("location: admin.php");
}
?>