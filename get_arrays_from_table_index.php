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




$result = $conn->query("SELECT * FROM MyGuests");

while($row = $result->fetch_object()) {
	$results[] = $row;
}

print_r($results);

$result->close();


?>
