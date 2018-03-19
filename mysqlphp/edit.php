<html>
<head>
  <title>Employee Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
  <form method="GET" action="edit1.php">
    <div class="container">
      <div class="panel panel-default">
       <div class="panel-body">
         <div class="row">
         <?php 
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "company";
$conn = new mysqli($server, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_GET['id'];

?>
           <h1><center>Employee Form</center></h1>
           <div class="col-md-6 col-md-6">
             <div class="col-md-12">
              <label>Employee ID:</label>
              <input type="text" name="name" value="<?php echo"$id"; ?>" readonly><br><br>
             <label>Name</label>
            <input type="text" name="name"><br><br>
          <label>Mobile</label>
          <input type="bigint" name="mob" maxlength="10"><br><br>
          <label>DOB</label>
          <input type="date" name="do"><br><br>
          <label>Jion Date</label>
          <input type="date" name="jd"><br><br>
          <label>Salary</label>
          <input type="number" name="sal"><br><br>
          <input type="submit">
           </div>
           </div>
           </div>
           </div>
           </div>
           </div>
           </form>
           </body>
           </html>
