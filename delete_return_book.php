<?php
// session_start();
// $sno = $_SESSION['sno'];
$sno = $_GET['sno_del'];
$conn = mysqli_connect('localhost','root','','miniproject');
$sql = "DELETE from `issue_book` where `sno` = $sno";
$result = mysqli_query($conn,$sql);
// echo $sno;
if($result){
    // echo "<script>alert('Deleted!');</script>";
    header("location: return_book.php");
}
?>