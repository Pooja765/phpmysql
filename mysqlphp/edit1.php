
<?php
$sn = "localhost";
$un = "root";
$pass = "";
$db = "company";

// Create connection
$conn = new mysqli($sn, $un, $pass, $db);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

//insert values
$id=$_GET["id"];
$fn=$_GET["name"];
//$mn=$_GET["mname"];
//$ln=$_GET["lname"];
$m1=$_GET["mob"];
$d1=$_GET["do"];
$jd=$_GET["jd"];
$s1=$_GET["sal"];

$sql="insert into employee(eid,name,mob,dob,jd,salary) values('$id',$fn','$m1','$d1','$jd','$s1');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
      echo "<table>";
      echo "<tr>";
      echo "<td> " . $id . "</td>";
      echo "<td> " . $fn . "</td>";
      echo "<td> " . $m1 . "</td>";
      echo "<td> " . $d1 . "</td>";
      echo "<td> " . $jd . "</td>";
      echo "<td> " . $s1 . "</td>" ;
      echo"</tr>";

echo "</table>";

$conn->close();

?>


