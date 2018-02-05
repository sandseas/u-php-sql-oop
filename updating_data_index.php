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



// Update rows of data in table
$sql = "UPDATE MyGuests 
		SET firstname='updatedName'
        WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





?>
