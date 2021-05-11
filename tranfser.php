
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <title>transfermoney.com</title>
</head>

<style> 

body{
    background-image: url(bankbg2.jpg);
    background-repeat:no-repeat;
    background-position:cover;
    background-size: cover;
}

#btn{
  background-color: black;
  color: white;
  border-radius: 10px;
  padding:8px;
    font-weight: bold;
    font-size:15px;
}
td{
    font-weight: bold;
    
}




</style>
<body>
   <center> <h1> Customer can transfer money here!</h1></center>



    
  <form method ="POST" action ="index.php">
 <table  align="center" cellspacing="25"> 
     <tr>
     
 <td> Name:  <td><input type="text" name="name" placeholder="enter your name">  </td></tr>
<tr>
    <td>Email: <td> <input type="email" name="email" placeholder="enter you email"> </td> </tr>


    <tr>
 <td> Mob no:  <td><input type="Mob no" name="mobno" placeholder="enter receiver mob no">  </td></tr>


 <tr>
  <td>Amount: <td><input type="number" name="balance" placeholder="enter the amount"></td> </tr>
<tr>
      <td align="center" colspan="2"><input type="submit"  id="btn" name="submit" value="Send money"> </td>  </tr>

      </form>
  </table>


  

 

  
    
</body>
</html>
<?php
 include 'index.php';
 if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    $bal = $_POST['balance'];

    $insertquery =    "insert into registration(name,email,mobno,amount)
    values('$name','$email','$mobno','$bal') " ;

   $res= mysqli_query($conn,$insertquery);
   if($res)
   {

    ?>
    <script>  
    
    alert("data insert properly");


</script>



<?php
   }
   else{


    ?>
    <script>  
    
    alert("data not insert properly");


</script>

<?php
   }

 }



?>














