<?php
include ("connection.php") ;
error_reporting (0) ;

$rollno=$_GET['rn'];

$get_data = "DELETE FROM DATA WHERE ID = '$rollno'";
$query_data=mysqli_query ($conn, $get_data) ;

if ($query_data)
{
    echo "<script>alert('Record Deleted from Database')</script>";
    
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/GDSC/fetchdata.php">
    <?php 
    }
else
{

echo "<font color='red'>Failed to delete Record from Database";
}
?>