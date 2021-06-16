<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Db connect</title>
</head>
<body>


<?php
    $servername = "localhost";
    $username = "root"; // gau
    $password = ""; // Gau75391Gau
    $dba="mydata";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dba);
    mysqli_set_charset($conn,'utf8');
    
    // Check connection
    //var_dump($conn);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
?>

    
</body>
</html>