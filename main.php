<?php
    require_once "database.php";
?>

<!DOCTYPE html>
<head>
    
    <title>Main</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <ul>
        <li><a href="?main=menu">menu</a></li>
        <li><a href="?main=users">users</a></li>
        <li><a href="?main=title">title</a></li>
        <li><a href="?main=data">data</a></li>
        <li><a href="?main=meta_d">Meta_d</a></li>
       
        
        <li><a href="main.php">Main</a></li>
    </ul>
    <?php
    
    if(isset($_GET['main']) && $_GET['main']=="delete"){
       
        $user=$_GET['users'];
        //echo $user;
    $del="DELETE FROM users WHERE id='$user'";  
    if(mysqli_query($conn,$del))    {
        header("Location:main.php?main=users");
        
    }   
        
    }

    elseif(isset($_GET['main']) && $_GET['main']=="update"){
        include "update_users.php"; 
 
        
    }
   
    if(isset($_GET['main']) && $_GET['main']=="menu"){
            include "menu.php";  
        
    }
    elseif(isset($_GET['main']) && $_GET['main']=="users"){
        include "users.php";
    }
    elseif(isset($_GET['main']) && $_GET['main']=="title"){
        include "title.php";
    }
    elseif(isset($_GET['main']) && $_GET['main']=="meta_d"){
        include "meta_d.php";
    }
    elseif(isset($_GET['main']) && $_GET['main']=="data"){
        include "data.php";
    }
  
    
    

    
        
    
    ?>
</body>
</html>