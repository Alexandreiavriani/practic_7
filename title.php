<?php
    require_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>
    <h2>Title</h2>
        <form method="post"> 
            <input type="text" name='title' placeholder='Title'>            
            <br><br>
            <button name='send'>Send</button>            
        </form>
    </div>
 <br><br>  


<?php


if(isset($_POST['send'])){
    $title=$_POST['title'];

    $query="INSERT INTO title_name(Title) VALUES 
    ('$title')";

    if (mysqli_query($conn, $query))
     {
        header("Location:main.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

?>
<?php

$select="Select * from title_name";
$sql=mysqli_query($conn,$select);

$fetch=mysqli_fetch_array($sql);
print_r($fetch);

?>


 

</body>
</html>