<?php require_once("Include/encrypt.php"); ?>
<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "studentreg";

//create connection

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
if (mysqli_connect_error()) {
 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}

else{



$firstName =$_POST['studentfname'];
$middleName=$_POST['studentmname']; 
$lastName = $_POST['studentlname'];
$dateOfBirth = $_POST['date'];
$streetAddress = $_POST['stAddress'];
$postalAddress = $_POST['pAddress'];
$phoneNumber = $_POST['phone'];
$studentEmail = $_POST['studEmail'];
$password = $_POST['password'];
$confirmPassword = $_POST['password'];
$parentEmail = $_POST['parentEmail'];
$studentWeight = $_POST['studentweight'];
$studentHeight = $_POST['studentheight'];

}
if($password =="" || $confirmPassword ==""){
  echo "<script> alert('Both Passwords must match!');
  window.location='reg.php'</script>";
}

else if ($password != $confirmPassword ) {
  echo "<script> alert('Passwords do not match!');
  window.location='reg.php'</script>";
}
else {

      $Hashed_Password=Password_Encrypter($password);
        $insert = "INSERT Into studentinfo (firstName, middleName, lastName, dateOfBirth, streetAddress, postalAddress, phoneNumber, studentEmail, password, parentEmail, studentWeight, studentHeight) values('$firstName', '$middleName', '$lastName', '$dateOfBirth', '$streetAddress', '$postalAddress', '$phoneNumber', '$studentEmail', '$Hashed_Password', '$parentEmail', '$studentWeight', '$studentHeight')";
   
        //Prepare statement
       
      /* $stmt = $conn->prepare($SELECT);
        $stmt->bind_param(" ", $studentEmail);
        $stmt->execute();
        $stmt->bind_result($studentEmail);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
         $stmt->close();
         $stmt = $conn->prepare($INSERT);
         $stmt->bind_param(" ", $firstName, $middleName, $lastName, $gender, $dateOfBirth, $streetAddress, $postalAddress, $phoneNumber, $studentEmail, $password, $parentEmail, $exercise, $studentWeight, $studentHeight);
         $stmt->execute();*/
       
       
        }

       if (mysqli_query($conn,$insert)) {
           
        header("location: ../html/index.html");
        }  
        else
        {
         echo "Please try again";
        }
    
   
   ?>