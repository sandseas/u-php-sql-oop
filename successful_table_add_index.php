 <?php

    $servername = "shareddb-g.hosting.stackcp.net";
    $username = "jantestdb-323788c2";
    $password = "oubgi8h0q7";
    $dbname = "jantestdb-323788c2";

    // Create the connection to the database with the above credentials
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the status of the connection and return a message if failed or connected
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully <br />";


//two examples of creating new tables in database
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE NewUsers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table NewUsers created successfully";
} else {
    echo "Error creating new users table: " . $conn->error;
}

$conn->close();

?>


	
	