<?php
   //local host server
   define("DB_SERVER", "localhost");
   //database username
   define("DB_USERNAME", "id7363115_depff");
   //database password
   define("DB_PASSWORD", "Mydogsnameismax13");
   //database name
   define("DB_DATABASE", "id7363115_ajleague");
   //start connection through the data defined
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	//if it doe not connect, kill the connection and display the error message.
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
else{
}
?>
