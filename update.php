<!DOCTYPE html>
<html>
  <?php
  include ('connection.php');
  error_reporting(0);
$rn= $_GET['rn'];
$fn= $_GET['fn'];

  ?>

<style>
    *{  padding: 2px;
        margin: 2px;
     }
    form{
        margin-left: 20px;
     }
    #fname{
        width: 300px;
        border: 0px;
        border-bottom: 2px solid #eee;
        margin-top: 20px;
        margin-left: 10px;
        font-size: 20px;
        font-family: Agency Fb;
    }
    #formbtn{
      margin-top: 20px;
      width: 150px;
      height: 50px;
      background: white;
      border: 2px solid black;
      margin-left: 50px;
    }
 #formbtn:hover{
    background:#eee;
     cursor: pointer;
 }

</style>

<body>

<h2>Edit Student Details</h2>

<form action="form.php" method ="POST">
  Enter Name: <input type="text" id="fname" name="fullname" value="<?php echo"$fn" ?>" required><br><br>
  Enter Enrollment Number:<input type="text" id="fname" name="rollno" value="<?php echo"$rn" ?>" required><br><br>
 
  For saving details: &nbsp;&nbsp;<input type="submit" id="formbtn" name="sbutton" value="Submit"><br><br>
 
  

</form>

</body>
</html>

<?php

if ($_GET['sbutton'])
{
$rollno = $_GET['ID'];
$name = $_GET['fullname'];


$get_data = "UPDATE DATA SET ID='$rollno', Name='$name' WHERE ID = '$rollno', Name='$name' ";
$query_data = mysqli_query($conn, $get_data);
if ($query_dat)
{

echo "<script>alert ('Record Updated') </script>";
?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/GDSC/fetchdata.php">
   
   <?php 
}

else

{
echo "Failed to Update Record";

}
}
?>
