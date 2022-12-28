<!DOCTYPE html>
<html>
  <?php
  include ('connection.php');
  error_reporting(0);
  $userName = $_POST['fullname'];
  $userID = $_POST['ID'];
  
  if(!$_POST['sbutton'])
  {
      echo "All fields are required";
   }
  else{
    $sql = "INSERT into Data (Name, ID)
    values ('$userName', '$userID') ";
    if (mysqli_query($conn, $sql) ){
      echo "Data creation successful";}
  else{
      echo "Something went wrong, try later";
  
  }
}
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

<h2>Input Student Details</h2>

<form action="form.php" method ="POST">
  Enter Name: <input type="text" id="fname" name="fullname" Placeholder="Full Name" required><br><br>
  Enter Enrollment Number:<input type="text" id="fname" name="ID" Placeholder="Enrollment Number" required><br><br>
 
  For saving details: &nbsp;&nbsp;<input type="submit" id="formbtn" name="sbutton" value="Submit"><br><br>
  
  For fetching details: &nbsp;&nbsp; <a href="http://localhost/GDSC/fetchdata.php"><input type="button" id="formbtn" name="fbutton" value="Fetch"></a><br><br>

  

</form>

</body>
</html>

