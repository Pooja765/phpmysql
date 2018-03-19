<html>
<head>
  <title>Employee Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
  <form method="GET" action="pmc.php">
    <div class="container">
      <div class="panel panel-default">
       <div class="panel-body">
         <div class="row">
             <div class="col-md-12">
             <?php
             $server = "localhost";
$user = "root";
$pass = "";
$dbname = "company";
$server ="localhost";
$conn = new mysqli($server, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_GET['id'];
$sql="select eid,name,mob,dob,jd,salary
from employee where eid='$id'";
$result = $conn->query($sql);
//table
echo "<table border=1>";
echo "<tr><td>ID</td><td>Name</td><td>MObile no</td><td>DOB</td><td>Joining date</td><td>Salary</td></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<br>";
      echo "<tr>";
        echo "<td> " . $row["eid"]. "</td>";
         echo "<td> " . $row["name"]. "</td>"; 
         echo "<td> " . $row["mob"]. "</td>";
         echo "<td> " . $row["dob"]. "</td>";
         echo "<td> " . $row["jd"]. "</td>";
         echo "<td> " . $row["salary"]. "</td>";
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
        </div>
        </form>
        </body>
        </html>
