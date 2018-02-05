 <?php

    $servername = "shareddb1e.hosting.stackcp.net";
    $username = "diarydb-3233e297";
    $password = "+HuF9NPw4fGC";
    $dbname = "diarydb-3233e297";

    // Create the connection to the database with the above credentials
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the status of the connection and return a message if failed or connected
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully <br />";

	//update a record in a table
	$sql = "UPDATE data SET name='Doe' WHERE id=2 LIMIT 1";

      if (mysqli_query($conn, $sql)) {
          echo "Record updated successfully";
      } else {
          echo "Error updating record: " . mysqli_error($conn);
      }

	//create a new record in a table
	$sql = "INSERT INTO data (name, email, password) VALUES ('william', 'william@test.com', 'williampassword')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        echo "add new record working <br />";

	$query = "SELECT `name` FROM data";

	if ($result=mysqli_query($conn, $query)) {
      
      	echo mysqli_num_rows($result);
      
      	while ($row = mysqli_fetch_array($result)) {
      
      	print_r($row);
      
        }
     	echo "<br />it worked"; 
    }

	

?>

<?php
	
	if ($_POST["submit"]) {
     $result='<div class = "alert alert-success">Form Submitted</div>'; 
    }
    
    	{
		
		if (!$_POST['name']) {
			
			$error="<br />Please enter your name";
			
		}
		
		if (!$_POST['email']) {
			
			$error.="<br />Please enter your email address";
			
		}
		
		if (!$_POST['comment']) {
			
			$error.="<br />Please enter a comment";
			
		}

		if ($_POST['email']!= "" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
            $error.="<br />Please enter a valid email address"; 
        }
		
		if ($error) {
		
		$result='<div class = "alert alert-danger"><strong>There were error(s)in you form:</strong>'.$error.'  </div>';
		} else {
         	if (mail("sandseas1@icloud.com", "Comment from website!", "Name: ".$_POST['name']." 
            
            Email: ".$_POST['email']."
            
            Comment:  ".$_POST['comment'])) {
              $result='<div class = "alert alert-success"> <strong>Thank you! </strong>We will be in touch!.
              
              </div>';
            
            } else {
             	 $result='<div class = "alert alert-danger"> <strong>Sorry, there were was an error sending your message, please try again later.</strong>.</div>';
            }
        }
	}
?>


<?php

/*
	$emailTo="";
	$subject="Form Test";
	$body="Hope this form test works";
	$headers="From: sandseas1@icloud.com";

	if (mail($emailTo, $subject, $body, $headers)) {
      
      echo "Mail sent successfully";
      
    } else {
     	echo "Mail not sent"; 
    }
*/	
	
?>

<?php

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Comparable" content="ie-edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="css/custom.css" >
  <title>Email Form</title>
  
  <style>
		.emailForm {
			
			border: 1px solid red;
			border-radius: 10px;
			margin-top: 20px;
		}
		
		form {
			
			padding-bottom: 20px;
			
		}
	
	</style>
</head>
<body>

  <?php
	$servername = "shareddb1e.hosting.stackcp.net";
    $username = "diarydb-3233e297";
    $password = "+HuF9NPw4fGC";
    $dbname = "diarydb-3233e297";

    // Create the connection to the database with the above credentials
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the status of the connection and return a message if failed or connected
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    //echo "Connected successfully";
?>
  
 
     <div class="container">
       			
				<div class="row">
					<div class="col md 6 col-md-offset-3 emailForm">
                      						
                      <h1>My email form</h1>
					
					<?php echo $result; ?>
					
										
					<p class="lead">Please get in touch!</p>
					
					
					<form method="post">
						<div class="form-group">
						
							<label for="name">Your Name:</label>
							<input type="text" name="name" class="form-control" placeholder="Your Name"
                                   value="<?php echo $_POST['name']; ?>" /> 
						
						</div>
						<div class="form-group">
							<label for="email">Your Email:</label>
							<input type="email" name="email" class="form-control" placeholder="Your Email" 
                                   value="<?php echo $_POST['email']; ?>"/>
							
						</div>
						
						<div class="form-group">
							<label for="comment">Your Comment:</label>
							<textarea class="form-control" name="comment" id="" cols="30" rows="5"><?php echo $_POST['comments']; ?></textarea>
							
						</div>
						
						<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
						
					</form>
					 
				</div>
					
			</div>
    </div> <!-- /end container -->
	
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</html>