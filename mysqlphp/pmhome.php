<html>
<head>
  <title>Employee Form</title>
   <style>
  table,tr,td{
     border: 3px solid black;
    width:auto;
    padding: ;
  }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
  <form method="GET" action="pmc.php">
    <div class="container">
      <div class="panel panel-default">
       <div class="panel-body">
         <div class="row"><center>
         <h2>CRUD operations</h2></center>
         <hr><br>
         <align=right>
         <input type="button" onclick="location.href ='pmc.html'" value="Add member"><br><br><br>
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
$sql="select *
from Employee";
$result = $conn->query($sql);
//table
echo "<table border=1>";
echo "<tr><td>ID</td><td>Name</td><td>MObile no</td><td>DOB</td><td>Joining date</td><td>Salary</td><td>Actions</td></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
        echo "<td> " . $row["eid"]. "</td>";
         echo "<td> " . $row["name"]. "</td>"; 
         echo "<td> " . $row["mob"]. "</td>";
         echo "<td> " . $row["dob"]. "</td>";
         echo "<td> " . $row["jd"]. "</td>";
         echo "<td> " . $row["salary"]. "</td>";
         echo "<td> <a href=edit.php?id=".$row["eid"].">Edit</a> <a href=view.php?id=".$row["eid"].">view</a> <a href=delete.php?id=".$row["eid"].">delete</a></td>";
      echo"</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";

echo "<hr><br>";
         ?>
         </div>
         </div>
         </div>
         </div>
         </form>
         </body>
         </html>

      