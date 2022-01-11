<?php

	$servername = "localhost";
        $username = "root";
        $password = "";
        $database = "tsf";

// Create connection
       { $DB_con = mysqli_connect($servername, $username, $password, $database);

	if(!$DB_con){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}
        
       }
        ?>