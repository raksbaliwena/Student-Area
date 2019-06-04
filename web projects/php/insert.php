<?php
$firstName =mysql_real_escape_string($_POST['studentfname']);
$middleName= mysql_real_escape_string($_POST['studentmname']);
$lastName = mysql_real_escape_string($_POST['studentlname']);
$gender = mysql_real_escape_string($_POST['gender']);
$dateOfBirth = mysql_real_escape_string($_POST['date']);
$streetAddress = mysql_real_escape_string($_POST['stAddress']);
$postalAddress = mysql_real_escape_string($_POST['pAddress']);
$phoneNumber =mysql_real_escape_string( $_POST['phone']);
$studentEmail = mysql_real_escape_string($_POST['studEmail']);
$password = mysql_real_escape_string($_POST['password']);
$confirmPassword = mysql_real_escape_string($_POST['password']);
$parentEmail = mysql_real_escape_string($_POST['parentEmail']);
$exercise = mysql_real_escape_string($_POST['exercise']);
$studentWeight = mysql_real_escape_string($_POST['studentweight']);
$studentHeight = mysql_real_escape_string($_POST['studentheight']);

if (!empty($firstName) || !empty($middleName) || !empty($lastName) || !empty($gender) || !empty($dateOfBirth) || !empty($streetAddress) || !empty($postalAddress) || !empty($phoneNumber) || !empty($studentEmail) || !empty($password) || !empty($parentEmail) || !empty($exercise) || !empty($studentWeight) || !empty($studentHeight)) {
    $host = "localhost";
       $dbUsername = "root";
       $dbPassword = "";
       $dbname = "studentreg";
   
       //create connection
   
       $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
       if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
       } else {
        $SELECT = "SELECT email From studentinfo Where email = ? Limit 1";
        $INSERT = "INSERT Into studentinfo (firstName, middleName, lastName, gender, dateOfBirth, streetAddress, postalAddress, phoneNumber, studentEmail, password, parentEmail, exercise, studentWeight, studentHeight) values($firstName, $middleName, $lastName, $gender, $dateOfBirth, $streetAddress, $postalAddress, $phoneNumber, $studentEmail, $password, $parentEmail, $exercise, $studentWeight, $studentHeight)";
   
        //Prepare statement
       
       $stmt = $conn->prepare($SELECT);
        $stmt->bind_param(" ", $studentEmail);
        $stmt->execute();
        $stmt->bind_result($studentEmail);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if ($rnum==0) {
         $stmt->close();
         $stmt = $conn->prepare($INSERT);
         $stmt->bind_param(" ", $firstName, $middleName, $lastName, $gender, $dateOfBirth, $streetAddress, $postalAddress, $phoneNumber, $studentEmail, $password, $parentEmail, $exercise, $studentWeight, $studentHeight);
         $stmt->execute();
       
       
   
         echo "New record inserted sucessfully";
        } else {
         echo "Someone already register using this email";
        }
        $stmt->close();
        $conn->close();
       }
       
   } else {
    echo "All field are required";
    die();
   }
   
   ?>