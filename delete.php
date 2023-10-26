<?php
include_once('connection.php');

if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];

$sql="DELETE FROM `tbl_curd` WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);

if($result){
    echo'Delete Success';
}
header('location:index.php');
}

?>