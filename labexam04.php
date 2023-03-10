
<?php include("mysql.php"); ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Validation</title>
    <style>
      input {
        padding: 15px;
        margin: 5px;
      }
      button {
        height: 40px;
      }

    table,td,th {
    border: 2px solid black;
    border-collapse: collapse;
    padding: 10px;

          }
</style>

    </style>
  </head>

  <body>
  <form action="#" method="POST">    
      <h2>Please fill all the fields</h2>
      ID <input type="number"  name="id" /><br />


      Email <input type="text" name="email" /><br />

      Password <input type="password" name="password" />
      <br />

      <input
        type="submit"
        value="Register"
        name="register"
      /><br />
    </form>

    <?php

include("mysql.php");
error_reporting(0);

$query = "SELECT * FROM users";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);  // to store the number of records in table



if($total!=0) // if there are no records in table

{
    ?>


<h1 align="center"> Records of the table </h1>
<table align="center" width="90%">
    <tr>
<th> ID </th>     
<th> Email </th> 
<th> Password </th>     

</tr>   

  <?php
   while($result = mysqli_fetch_assoc($data))
   {
    echo"<tr>
    
<td>".$result['ID']." </td>    
<td>".$result['Email']." </td>  
<td>".$result['Password']." </td>   
</tr> ";
   }
}
else {
    echo "no records found";
}
  ?>
</table>




  </body>
</html>



<?php 

if(isset($_POST['register']))
{
  
  $id = $_POST['id'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO users VALUES('$id','$email','$password')";
  $data = mysqli_query($conn,$query);

  if($data){
    echo "Data inserted into database";
  }
  else {
    echo "Failed";
  }
}

?>