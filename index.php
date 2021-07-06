<?php
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "university");
//define("DB_PORT", "3306");


var_dump(DB_SERVERNAME, DB_USERNAME,DB_PASSWORD,DB_NAME);


//connect
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME,DB_PASSWORD,DB_NAME);
var_dump($conn);


//check connection
 if($conn && $conn->connect_error) {
    echo "connection failed: " . $conn && $conn->connect_error;
}; 

$sql ="SELECT * FROM students";
$results= $conn->query($sql);
var_dump($results);

if($results && $results->num_rows>0) {
    while($row = $results->fetch_array()){?>
<h2><?php $row ?></h2> <?php
        var_dump($row);
    }
}