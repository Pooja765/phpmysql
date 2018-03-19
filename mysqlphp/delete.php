
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
echo $id;
echo "<script type='text/javascript'>alert('are you sure?'');</script>";
$sql="delete from employee where eid='$id'";
$result = $conn->query($sql);
echo $result;
         ?>


