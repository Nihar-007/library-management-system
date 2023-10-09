<?php
// session_start();
// $sno = $_SESSION['sno'];
$sno = $_GET['sno_del'];
$conn = mysqli_connect('localhost','root','','miniproject');
$sql = "DELETE from `requests` where `r_id` = $sno";
$result = mysqli_query($conn,$sql);
echo $sno;
if($result){
    // echo "<script>alert('Deleted!');</script>";
    header("location: requested_books.php");
}
?>