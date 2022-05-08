<html>
<head>


<title>Employee Regisration App</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: left;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 100px;
  border-radius: 200px;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$servername = "db";
$username = "root";
$password = "rootpw";
$dbname = "company";


// Connect to MySQL
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If database is not exist create one
if (!mysqli_select_db($conn,$dbname)){
    $sql = "CREATE DATABASE ".$dbname;
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    }else {
        echo "Error creating database: " . $conn->error;
    }
}


$query = "SELECT ID FROM employee";
$result = mysqli_query($conn, $query);

if(empty($result)) {
                $query = "CREATE TABLE employee (
                          mobile int(11),
                          name varchar(255) NOT NULL,
                          PRIMARY KEY  (mobile)
                          )";
                $result = mysqli_query($conn, $query);
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM employee";
$result = mysqli_query($conn, $query);
while ($row = $result->fetch_assoc()) {
        #echo $row ."<br>";
        print_r($row);
}
$conn->close();
}
?>

</head>
<body>
<h2> Employee Registration Form </h2>
<form action="info.php" method="POST">
        <div class="imgcontainer">
 // <img src="image.png" alt="Avatar" class="avatar">
  </div>

<div class="container">
    <button type="submit">GET Employee Details</button>
  </div>

        </form>
</body>
</html>


