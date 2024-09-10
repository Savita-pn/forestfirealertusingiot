<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="2">
<?php
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iot";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

$quer12=mysqli_query($conn,"SELECT * FROM parking1_tab where pid=1"); 
$noticia12 = mysqli_fetch_array($quer12);
    $conn->close();
?>

<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<center>
<h1>Parking Management using IoT</h1>

<?php
$slot1 = $noticia12['slot1'];
$slot2 = $noticia12['slot2'];
?>
<table width=800 border=0>
<tr>
<td height=200>
<table width=800 border=0>

<tr>
<td width=20 height=200 background="rd1.jpg"></td>

<?php
if  ($slot1==2)
echo "<td width=220  height=200 bgcolor='green' align='center'><h2>Parking Slot 1 Available</h2></td>";
else
echo "<td width=220  height=200 bgcolor='red' align='center'><h2>Parking Slot 1 Not Available</h2></td>";
?>

<td width=20 height=200 background="rd1.jpg"></td>

<?php
if  ($slot2==2)
echo "<td width=220  height=200 bgcolor='green' align='center'><h2>Parking Slot 2 Available</h2></td>";
else
echo "<td width=220  height=200 bgcolor='red' align='center'><h2>Parking Slot 2 Not Available</h2></td>";
?>

<td width=20 height=200 background="rd1.jpg"></td>

</tr>
</table>
</td>
</tr>
<tr>
<td height=200 background="rd.jpg">
</td>
</tr>

</table>
</center>
</body>
</html>
