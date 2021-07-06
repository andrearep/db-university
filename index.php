<?php
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "university");
//define("DB_PORT", "3306");


//var_dump(DB_SERVERNAME, DB_USERNAME,DB_PASSWORD,DB_NAME);


//connect
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME,DB_PASSWORD,DB_NAME);
//var_dump($conn);


//check connection
 if($conn && $conn->connect_error) {
    echo "connection failed: " . $conn && $conn->connect_error;
}; 

$sql ="SELECT * FROM students";
$results= $conn->query($sql);
//var_dump($results);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1 {
        text-align: center;
        font-size: 4rem;
        color: red;
    }

    .card {
        width: 300px;

    }
    </style>
</head>

<body>

</body>

</html>
<h1>Elenco Studenti Università</h1>
<?php
if($results && $results->num_rows>0) {
    while($row = $results->fetch_array()){?>
<div class="card">
    <h2><?php echo $row[0] . ") Nome: " . $row[2] ?></h2>
    <h2><?php echo "Cognome: " . $row[3]?></h2>
    <hr>
</div> <?php
        //var_dump($row);
    }
}