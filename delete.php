<?php
    require_once "database.php";
?>

<!DOCTYPE html>

<head>
<html lang="en">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<style>

div{
    border: solid 1px black;
    width:250px;
    padding: 10px;
    
    
}
</style>

<?php



    if(isset($_POST['send'])){
        $name=$_POST['name'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];
        $date=$_POST['date'];
        $reg_date=$_POST['reg_date'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];

        $query="INSERT INTO users(Name,Lastname,Age,Date,Reg_Date,Password,Gender) VALUES 
        ('$name','$lname','$age','$date','$reg_date',' $password','$gender')";

        if (mysqli_query($conn, $query))
         {
            header("Location:main.php");
         }
       
         else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
        

        
    }


?>





    <div>
    <h2>Users</h2>
        <form method="post"> 
            <input type="text" name='name' placeholder='name'>
            <br><br>
            <input type="text" name='lname' placeholder='lname'>
            <br><br>
            <input type="number" name='age' placeholder='age'>
            <br><br>
            <input type="Date" name='date' placeholder='Date'>
            <br><br>
            <input type="Date" name='reg_date' placeholder='reg_date'>
            <br><br>
            <input type="password" name='password' placeholder='password'>
            <br><br>
            <label>Gender</label>
            <br><br>
            <input  value='Male' type="radio" name='gender'> Male
            <br><br>
            
            <input  value='Female' type="radio" name='gender'> Female
            <br><br>
            <button name='send'>Send</button>            
        </form>
    </div>
 <br><br>  

   

   <?php
   $select_query="Select Gender,Age,Reg_Date,Date,id from users";
   $mysql=mysqli_query($conn,$select_query);

   
        
   
   ?>
   

1) users ცხრილიდან გამოიტანეთ პირველი 3 ჩანაწერის Age, Date, Reg_Date, Gender ველების მნიშვნელობები.
  <a style="color:green;margin-left:25px;" href="?main=UPDATE"> UPDATE</a> <tr>

   
    


 <?php  while($fetch_ar=mysqli_fetch_array($mysql)){   
    
    ?>
<br>
<div style='border:solid 0px white'>
    <div ><?=$fetch_ar['Gender']?></div>
    <div><?=$fetch_ar['Age']?></div>
    <div><?=$fetch_ar['Reg_Date']?></div>
    <div><?=$fetch_ar['Date']?> </div>
    <div><a href="?main=delete&users=<?=$fetch_ar['id']?>">DELETE</a></div>

</div> 
    

   <?php
   }
   
   
   ?>


<br><br>

   
<?php
   $select_query="Select * from users Where id=1 or id=2";
   $mysql=mysqli_query($conn,$select_query);

   
        
   
   ?>
   
<table  border='1'>
2) users ცხრილიდან გამოიტანეთ პირველი 2 ჩანაწერის ყველა ველის მნიშვნელობები.
<tr>

    <td><h4>name</h4></td>
    <td><h4>lname</h4></td>
    <td><h4>password</h4></td>
    <td><h4>gender</h4></td>
    <td><h4>age</h4></td>
    <td><h4>reg_date</h4></td>
    <td><h4>date</h4></td>
    
</tr>
<tr> <?php  while($fetch_ar=mysqli_fetch_array($mysql)){   ?>


    <td><?=$fetch_ar['Name']?></td>
    <td><?=$fetch_ar['Lastname']?></td>
    <td><?=$fetch_ar['Password']?></td>
    <td><?=$fetch_ar['Gender']?></td>
    <td><?=$fetch_ar['Age']?></td>
    <td><?=$fetch_ar['Reg_Date']?></td>
    <td><?=$fetch_ar['Date']?></td>
    
</tr>
   <?php
   }
   
   
   ?>
</table>


<br><br>

   
<?php
   $select_query="Select * from users Where id>1 and id<4";
   $mysql=mysqli_query($conn,$select_query);

   
        
   
   ?>
   
<table  border='1'>
3) users ცხრილიდან გამოიტანეთ იმ ჩანაწერების ყველა ველის მნიშვნელობები რომელთა id>'1' და id<'4'
<tr>

    <td><h4>name</h4></td>
    <td><h4>lname</h4></td>
    <td><h4>password</h4></td>
    <td><h4>gender</h4></td>
    <td><h4>age</h4></td>
    <td><h4>reg_date</h4></td>
    <td><h4>date</h4></td>
    
</tr>
<tr> <?php  while($fetch_ar=mysqli_fetch_array($mysql)){   ?>


    <td><?=$fetch_ar['Name']?></td>
    <td><?=$fetch_ar['Lastname']?></td>
    <td><?=$fetch_ar['Password']?></td>
    <td><?=$fetch_ar['Gender']?></td>
    <td><?=$fetch_ar['Age']?></td>
    <td><?=$fetch_ar['Reg_Date']?></td>
    <td><?=$fetch_ar['Date']?></td>
    
</tr>
   <?php
   }
   
   
   ?>
</table>

<br><br>

   
<?php
   $select_query="Select * from users Where id<2 or id>4";
   $mysql=mysqli_query($conn,$select_query);

   
        
   
   ?>
   
<table  border='1'>
4) users ცხრილიდან გამოიტანეთ იმ ჩანაწერების ყველა ველის მნიშვნელობები რომელთა id<2 ან  id>4.
<tr>

    <td><h4>name</h4></td>
    <td><h4>lname</h4></td>
    <td><h4>password</h4></td>
    <td><h4>gender</h4></td>
    <td><h4>age</h4></td>
    <td><h4>reg_date</h4></td>
    <td><h4>date</h4></td>
    
</tr>
<tr> <?php  while($fetch_ar=mysqli_fetch_array($mysql)){   ?>


    <td><?=$fetch_ar['Name']?></td>
    <td><?=$fetch_ar['Lastname']?></td>
    <td><?=$fetch_ar['Password']?></td>
    <td><?=$fetch_ar['Gender']?></td>
    <td><?=$fetch_ar['Age']?></td>
    <td><?=$fetch_ar['Reg_Date']?></td>
    <td><?=$fetch_ar['Date']?></td>
    
</tr>
   <?php
   }
   
   
   ?>
</table>

<br><br>

   
<?php
   $select_query="Select * from users Where Date = '2021-05-13' ";
   $mysql=mysqli_query($conn,$select_query);

   
        
   
   ?>
   
<table  border='1'>
5) users ცხრილიდან გამოიტანეთ იმ ჩანაწერის ყველა ველის მნიშვნელობები რომლის Date = 2021-05-13.
<tr>

    <td><h4>name</h4></td>
    <td><h4>lname</h4></td>
    <td><h4>password</h4></td>
    <td><h4>gender</h4></td>
    <td><h4>age</h4></td>
    <td><h4>reg_date</h4></td>
    <td><h4>date</h4></td>
    
</tr>
<tr> <?php  while($fetch_ar=mysqli_fetch_array($mysql)){   ?>


    <td><?=$fetch_ar['Name']?></td>
    <td><?=$fetch_ar['Lastname']?></td>
    <td><?=$fetch_ar['Password']?></td>
    <td><?=$fetch_ar['Gender']?></td>
    <td><?=$fetch_ar['Age']?></td>
    <td><?=$fetch_ar['Reg_Date']?></td>
    <td><?=$fetch_ar['Date']?></td>
    
</tr>
   <?php
   }
   
   
   ?>
</table>

<br><br>

   
<?php
   $select_query="Select * from users Where Date > '2014-07-04' ";
   $mysql=mysqli_query($conn,$select_query);

   
        
   
   ?>
   
<table  border='1'>
6) users ცხრილიდან გამოიტანეთ იმ ჩანაწერების ყველა ველის მნიშვნელობები რომელთა Date > 2014-07-04.
<tr>

    <td><h4>name</h4></td>
    <td><h4>lname</h4></td>
    <td><h4>password</h4></td>
    <td><h4>gender</h4></td>
    <td><h4>age</h4></td>
    <td><h4>reg_date</h4></td>
    <td><h4>date</h4></td>
    
</tr>
<tr> <?php  while($fetch_ar=mysqli_fetch_array($mysql)){   ?>


    <td><?=$fetch_ar['Name']?></td>
    <td><?=$fetch_ar['Lastname']?></td>
    <td><?=$fetch_ar['Password']?></td>
    <td><?=$fetch_ar['Gender']?></td>
    <td><?=$fetch_ar['Age']?></td>
    <td><?=$fetch_ar['Reg_Date']?></td>
    <td><?=$fetch_ar['Date']?></td>
    
</tr>
   <?php
   }
   
   
   ?>
</table>

<br><br>

   
<?php
   $select_query="Select * from users Where Date > '2021-06-04' or Date < '2021-07-04' ";
   $mysql=mysqli_query($conn,$select_query);

   
        
   
   ?>
   
<table  border='1'>
7) users ცხრილიდან გამოიტანეთ იმ ჩანაწერების ყველა ველის მნიშვნელობები რომელთა Date > 2014-06-04 და Date < 2014-07-04.

<tr>

    <td><h4>name</h4></td>
    <td><h4>lname</h4></td>
    <td><h4>password</h4></td>
    <td><h4>gender</h4></td>
    <td><h4>age</h4></td>
    <td><h4>reg_date</h4></td>
    <td><h4>date</h4></td>
    
</tr>
<tr> <?php  while($fetch_ar=mysqli_fetch_array($mysql)){   ?>


    <td><?=$fetch_ar['Name']?></td>
    <td><?=$fetch_ar['Lastname']?></td>
    <td><?=$fetch_ar['Password']?></td>
    <td><?=$fetch_ar['Gender']?></td>
    <td><?=$fetch_ar['Age']?></td>
    <td><?=$fetch_ar['Reg_Date']?></td>
    <td><?=$fetch_ar['Date']?></td>
    
</tr>
   <?php
   }
   
   
   ?>
</table>


<br><br>

   
<?php
   $select_query="Select * from users Where Age >= 10 and Age <= 18 ";
   $mysql=mysqli_query($conn,$select_query);

   
        
   
   ?>
   
<table  border='1'>
8) users ცხრილიდან გამოიტანეთ იმ ჩანაწერების ყველა ველის მნიშვნელობები რომელთა Age >= 10 და Age <=18.

<tr>

    <td><h4>name</h4></td>
    <td><h4>lname</h4></td>
    <td><h4>password</h4></td>
    <td><h4>gender</h4></td>
    <td><h4>age</h4></td>
    <td><h4>reg_date</h4></td>
    <td><h4>date</h4></td>
    
</tr>
<tr> <?php  while($fetch_ar=mysqli_fetch_array($mysql)){   ?>


    <td><?=$fetch_ar['Name']?></td>
    <td><?=$fetch_ar['Lastname']?></td>
    <td><?=$fetch_ar['Password']?></td>
    <td><?=$fetch_ar['Gender']?></td>
    <td><?=$fetch_ar['Age']?></td>
    <td><?=$fetch_ar['Reg_Date']?></td>
    <td><?=$fetch_ar['Date']?></td>
    
</tr>
   <?php
   }
   
   
   ?>
</table>
  

</body>
</html>