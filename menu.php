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
    <link rel="stylesheet" href="style.css">
</head>
<body>



<?php



    if(isset($_POST['send'])){
        $title_id=$_POST['Title'];
        $meta_k=$_POST['Meta_k'];
        $meta_d=$_POST['Meta_d'];
        $text=$_POST['Text'];
        $query="INSERT INTO menu(title_id,Meta_k,Meta_d,Text) VALUES 
        ('$title_id','$meta_k','$meta_d','$text')";

        if (mysqli_query($conn, $query))
         {
            header("Location:main.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }      
    }


?>

    <div>
    <h2>Menu</h2>
        <form method="post"> 
            <input type="number" name='Title' placeholder='title'>
            <br><br>
            <input type="text" name='Meta_k' placeholder='metak'>
            <br><br>
            <input type="text" name='Meta_d' placeholder='metad'>
            <br><br>
            <input type="text" name='Text' placeholder='text'>
            <br><br>
            <button name='send'>Send</button>            
        </form>
    </div>




    <?php

$select_query_menu="Select Text,title_id from menu Where id=1";
$mysql_menu=mysqli_query($conn,$select_query_menu);


?>



<table border='1'>
1) menu ცხრილიდან გამოიტანეთ მხოლოდ პირველი ჩანაწერის Text, Title ველების მნიშვნელობები.

<tr>

<td>Title</td>
<td>Text</td>

</tr>


<tr>

<?php while($menu_fetch=mysqli_fetch_array($mysql_menu)) {

?>


<td><?=$menu_fetch['title_id'] ?></td>
<td><?=$menu_fetch['Text'] ?></td>

</tr>

<?php

}

?>

</table>

<br><br>


<?php

$select_query_menu="Select Text,Title from menu
inner join title_name
on menu.title_id=title_name.title_id";
$mysql_menu=mysqli_query($conn,$select_query_menu);


?>


<table border='1'>
2) menu ცხრილიდან გამოიტანეთ ყველა ჩანაწერის Text, Title ველების მნიშვნელობები.

<tr>

<td>Title</td>
<td>Text</td>

</tr>


<tr>

<?php while($menu_fetch=mysqli_fetch_array($mysql_menu)) {

?>



<td><?=$menu_fetch['Title'] ?></td>
<td><?=$menu_fetch['Text'] ?></td>

</tr>

<?php

}

?>

</table>



<br><br>


<?php

$select_query_menu="Select * from menu Where id=2";
$mysql_menu=mysqli_query($conn,$select_query_menu);


?>


<table border='1'>
3) menu ცხრილიდან გამოიტანეთ იმ ჩანაწერის ყველა ველის მნიშვნელობები რომლის id=2.

<tr>

<td style='font-weight:bold;'> Title</td>
<td  style='font-weight:bold;'>Text</td>
<td  style='font-weight:bold;'>Meta_k</td>
<td  style='font-weight:bold;'>Meta_d</td>

</tr>


<tr>

<?php while($menu_fetch=mysqli_fetch_array($mysql_menu)) {

?>


<td><?=$menu_fetch['title_id'] ?></td>
<td><?=$menu_fetch['Text'] ?></td>
<td><?=$menu_fetch['Meta_k'] ?></td>
<td><?=$menu_fetch['Meta_d'] ?></td>

</tr>

<?php

}

?>

</table>


<br><br>


<?php

$select_query_menu="Select * from menu Where  id>=2";
$mysql_menu=mysqli_query($conn,$select_query_menu);


?>


<table border='1'>
4) menu ცხრილიდან გამოიტანეთ იმ ჩანაწერების ყველა ველის მნიშვნელობები, რომელთა id>=2.

<tr>

<td style='font-weight:bold;'> Title</td>
<td  style='font-weight:bold;'>Text</td>
<td  style='font-weight:bold;'>Meta_k</td>
<td  style='font-weight:bold;'>Meta_d</td>

</tr>


<tr>

<?php while($menu_fetch=mysqli_fetch_array($mysql_menu)) {

?>


<td><?=$menu_fetch['title_id'] ?></td>
<td><?=$menu_fetch['Text'] ?></td>
<td><?=$menu_fetch['Meta_k'] ?></td>
<td><?=$menu_fetch['Meta_d'] ?></td>

</tr>

<?php

}

?>

</table>


<br><br>


<?php

$select_query_menu="Select * from menu Where  id<=4";
$mysql_menu=mysqli_query($conn,$select_query_menu);


?>


<table border='1'>
5) menu ცხრილიდან გამოიტანეთ იმ ჩანაწერების ყველა ველის მნიშვნელობები, რომელთა id<=4.

<tr>

<td style='font-weight:bold;'> Title</td>
<td  style='font-weight:bold;'>Text</td>
<td  style='font-weight:bold;'>Meta_k</td>
<td  style='font-weight:bold;'>Meta_d</td>

</tr>


<tr>

<?php while($menu_fetch=mysqli_fetch_array($mysql_menu)) {

?>


<td><?=$menu_fetch['title_id'] ?></td>
<td><?=$menu_fetch['Text'] ?></td>
<td><?=$menu_fetch['Meta_k'] ?></td>
<td><?=$menu_fetch['Meta_d'] ?></td>

</tr>

<?php

}

?>

</table>


<br><br>


<?php

$select_query_menu="Select * from menu 
inner join title_name
on menu.title_id=title_name.title_id


Where  Title='თამაშები' or Title='ფილმები' ";
$mysql_menu=mysqli_query($conn,$select_query_menu);


?>


<table border='1'>
6) menu ცხრილიდან გამოიტანეთ იმ ჩანაწერების ყველა ველის მნიშვნელობები, რომელთა Title=“ფილმები” ან Title=„თამაშები“;

<tr>

<td style='font-weight:bold;'> TitleID</td>
<td style='font-weight:bold;'> Title</td>
<td  style='font-weight:bold;'>Text</td>
<td  style='font-weight:bold;'>Meta_k</td>
<td  style='font-weight:bold;'>Meta_d</td>

</tr>


<tr>

<?php while($menu_fetch=mysqli_fetch_array($mysql_menu)) {

?>


<td><?=$menu_fetch['title_id'] ?></td>
<td><?=$menu_fetch['Title'] ?></td>
<td><?=$menu_fetch['Text'] ?></td>
<td><?=$menu_fetch['Meta_k'] ?></td>
<td><?=$menu_fetch['Meta_d'] ?></td>

</tr>

<?php

}

?>

</table>

<br><br>


<?php

$select_query_menu="Select * from menu 
inner join title_name
on menu.title_id=title_name.title_id


Where  Title='მუსიკები' and id>3";
$mysql_menu=mysqli_query($conn,$select_query_menu);


?>


<table border='1'>
7) menu ცხრილიდან გამოიტანეთ იმ ჩანაწერების ყველა ველის მნიშვნელობები, რომელთა Title=“მუსიკები” და Id>3 ;

<tr>

<td style='font-weight:bold;'> TitleID</td>
<td style='font-weight:bold;'> Title</td>
<td  style='font-weight:bold;'>Text</td>
<td  style='font-weight:bold;'>Meta_k</td>
<td  style='font-weight:bold;'>Meta_d</td>

</tr>


<tr>

<?php while($menu_fetch=mysqli_fetch_array($mysql_menu)) {

?>


<td><?=$menu_fetch['title_id'] ?></td>
<td><?=$menu_fetch['Title'] ?></td>
<td><?=$menu_fetch['Text'] ?></td>
<td><?=$menu_fetch['Meta_k'] ?></td>
<td><?=$menu_fetch['Meta_d'] ?></td>

</tr>

<?php

}

?>

</table>
    



</body>
</html>