<!DOCTYPE html>
<html>
 
<?php
     include ('connection.php');
?>


<head>
<h2>Data Stored</h2>
</head>

<body>
<table border ="2" cellspacing ="7">

<tr>
<th>Roll No</th>
<th>Name</th>

<th colspan="2" align="center">Operation</th>
</tr>

 

<div id="main">

<?php

 

$get_data = "select * from data";
$query_data = mysqli_query($conn, $get_data);

while ($row_data = mysqli_fetch_array ($query_data)) {
    // $id = $row_data['ID'];
    // $name = $row_data['Name'];
 
    // echo $id . '&nbsp;&nbsp;' . $name . '<br>';
    echo "

    <tr>

    <td>". $row_data['ID']."</td>

    <td>". $row_data['Name']."</td>


<td><a href = 'update.php?rn=$row_data[ID]&fn=$row_data[Name]' ><input type='submit' id='ubtn' value='Update'></td>
<td><a href = 'delete1.php?rn=$row_data[ID]' onclick='return checkdelete()'><input type='submit' id='ubtn' value='Delete'></td>
</tr>
 ";
 

}
?>
<script>
function checkdelete()
{
    return Confirm('Are you sure of deletion');
}
</script>
</div>

</html>