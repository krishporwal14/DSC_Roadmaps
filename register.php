<?php
	// Open a new connection to the MySQL server
    $conn = mysqli_connect("localhost","u303247911_dsc_website","dsc_website@Hostinger23","u303247911_dsc_website");  
    if (mysqli_connect_error()){ //for connection error finding
        die('There was an error while connecting to database');
    }
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	//sql query
	$sql = "insert into users values('$name','$email','$password')";
	if(mysqli_query($conn, $sql)) {
	    header("location: https://sanjivanikbpcm.com/dsc_website/career-list.html");
	    exit;
	}
	//close connection
	mysqli_close($conn);
