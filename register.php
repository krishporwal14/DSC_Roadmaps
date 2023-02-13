<?php
	// Open a new connection to the MySQL server
<<<<<<< HEAD
    $conn = mysqli_connect("localhost","root","14Kr!shp","dsc_website");  
=======
    $conn = mysqli_connect("localhost","u303247911_dsc_website","dsc_website@Hostinger23","u303247911_dsc_website");  
>>>>>>> 6b60e31cd07f3622e6131f452e29305d4ffbad73
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
<<<<<<< HEAD
	    exit();
	}
	//close connection
	mysqli_close($conn);
?>
=======
	    exit;
	}
	//close connection
	mysqli_close($conn);
>>>>>>> 6b60e31cd07f3622e6131f452e29305d4ffbad73
