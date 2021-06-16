<?php
    require_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>UserUpdate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(isset($_GET['users'])){
        $users=$_GET['users'];
        $select="SELECT * FROM users where id='$users'";
        $query=mysqli_query($conn,$select);
        $fetch_ar=mysqli_fetch_array($query);
    }

    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];
        $date=$_POST['date'];
        $reg_date=$_POST['reg_date'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $id=$_POST['id'];

        $upda="UPDATE users SET Name='$name',Lastname='$lname',Age='$age',Date='$date',Reg_Date='$reg_date',
        Password=' $password',Gender='$gender' where id='$id'";
   
        if (mysqli_query($conn, $upda))
         {
            header("Location:main.php?main=users");
         }
       
         else {
            echo "Error: " . $upda . "<br>" . mysqli_error($conn);
        }
        

        
    }
    
    ?>
      <div>
    <h2>Users_Update</h2>
        <form method="post"> 
            <input type="text" name='name' value="<?=$fetch_ar['Name']?>" >
            <br><br>
            <input type="text" name='lname'  value="<?=$fetch_ar['Lastname']?>" >
            <br><br>
            <input type="number" name='age'  value="<?=$fetch_ar['Age']?>">
            <br><br>
            <input type="Date" name='date' value="<?=$fetch_ar['Date']?>" >
            <br><br>
            <input type="Date" name='reg_date'  value="<?=$fetch_ar['Reg_Date']?>">
            <br><br>
            <input type="password" name='password' value="<?=$fetch_ar['Password']?>">
            <br><br>
            <label>Gender</label>
            <br><br>
            <input   type="radio" name='gender' value="Female" value="<?=$fetch_ar['Gender']?>"> Male
            <br><br>
            
            <input  value="<?=$fetch_ar['Gender']?>" value="Male" type="radio" name='gender' > Female
            <br><br>
            <input type="hidden" name="id" value="<?=$fetch_ar['id']?>">
            <button name='update'>Send</button>            
        </form>
    </div>
 <br><br> 
</body>
</html>