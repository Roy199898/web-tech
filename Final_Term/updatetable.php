<?php
  

 function renderForm($id ,$date ,$username,$item,$quantity,$amount, $error)

 {
 ?>

 <?php 
     }


     $item = $_GET['item']

     
     include('connect-db.php');

     
     if (isset($_POST['submit']))
     { 
   
     $id = mysql_real_escape_string(htmlspecialchars($_POST['id']));
     $date = mysql_real_escape_string(htmlspecialchars($_POST['date']));
     $username = mysql_real_escape_string(htmlspecialchars($_POST['username']));
     $item = mysql_real_escape_string(htmlspecialchars($_POST['item']));
     $quantity = mysql_real_escape_string(htmlspecialchars($_POST['quantity']));
     $amount = mysql_real_escape_string(htmlspecialchars($_POST['amount']));



     
     if ($date == '' || $quantity == '')
     {
     
     $error = 'ERROR: Please fill in all required fields!';

   
     renderForm($id ,$date ,$username,$item,$quantity,$amount,  $error);

     }
     else
     {
    
      mysql_query("INSERT INTO  sale SET date='$date', username='$username',item='$item',quantity='$quantity',amount='$amount'")


    $result = mysql_query("UPDATE stock SET quantity='-$quantity' WHERE item='$item'") 




     or die(mysql_error()); 
     echo "<center>Stock Enter Complete!</center>";
     

     }
     }
     }
     else
     
     {
     renderForm('','','','','','','','');
     }

             ?>