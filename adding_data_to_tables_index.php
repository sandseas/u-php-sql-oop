 <?php

    $servername = "shareddb-g.hosting.stackcp.net";
    $username = "jantestdb-323788c2";
    $password = "oubgi8h0q7";
    $dbname = "jantestdb-323788c2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Insert rows of data into table
$sql = "INSERT INTO MyGuests (firstname, lastname, email, reg_date)
VALUES ('Jerry', 'Van', 'jerry@example.com', NOW())";
  
  

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





?>
