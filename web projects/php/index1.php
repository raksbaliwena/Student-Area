<?php
$server = 'localhost';
	$user = 'root';
	$password ='';
	$database = 'studentreg';

	$connect = @mysqli_connect($server, $user, $password, $database);
	
	if(!$connect){
		die('Fail to connect '. mysqli_connect_error());
    }

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email =$_POST['email'];
      $password =$_POST['password']; 
      
      $sql = "SELECT studentEmail FROM studentinfo WHERE  studentEmail= '$email' and password= '$password'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

         $_SESSION['login_user'] = $email;
         
         header("location: ../html/Teacher.html");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error; 
      }
   }
?>