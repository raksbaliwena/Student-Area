
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
        <link href="../img/lynda.png" rel="icon" type="image/png">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Student Registration: STARET</title>

    </head>
<body>
<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="">
            <img src="../img/lynda.png" width="30" height="30" class="d-inline-block align-top" alt="">
            STARET: Student Area eLearning Tool 
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a class="nav-link" href="">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="">Contact</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="">About</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="">Logout</a>
    </ul>
    </div>
</nav>

<h1>STUDENT REGISTRATON</h1>
<form action="trial.php" method="POST" name="StudentReg" >

    <!--Personal Information-->
    <fieldset class="container">
    <legend>Personal Information</legend>

    <label for="name">Name</label>
    <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="studentfname" placeholder="First name" autofocus>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="studentmname" placeholder="Middle name">
            </div>
            <div class="col">
                    <input type="text" class="form-control"  name="studentlname" placeholder="Last name">
                  </div>
          </div>
    <div><br>
        <label for="dob">Date of Birth</label><br>
        <input type="date" name="date" value="">
    </div><br>
    <label for="gender">Gender</label><br>
    <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="gender" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Male</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="gender" class="custom-control-input">
            <label class="custom-control-label" for="customRadio2">Female</label>
          </div><br>
    <div>
        <label for="address">Address</label><br>
        <input type="text" name="stAddress"​​ class="form-control" placeholder="Street Address" required><br><br>
        <input ​​​type="text" name="pAddress" class="form-control" placeholder="Postal Address" required><br>
    </div><br>
    <div>
        <label for="contact">Phone Number</label><br>
        <input ​​​class="w3-input" class="form-control" name="phone" type="tel" 
        placeholder="Home" required>
    </div><br>
    <div>
        <label for="email">Email Address</label><br>
        <input type="email" name="studEmail" class="form-control" placeholder="email@example.com" required>
    </div><br>
    <div>
        <label for="password">Password</label><br>
        <input type="password" id="one" class="form-control" name="password" placeholder="password"><br><br>
        <input type="password" id="two" class="form-control" name="confirmpassword" placeholder="confirm password"><br><br>
        
    </div><br>
    
    <div>
            <label for="Parent">Parent's Details</label><br>
            <input type="text" name="parentfname" class="form-control" placeholder="First Name" required><br><br>
            <input type="text" name="parentlname" class="form-control" placeholder="Last Name" required><br><br>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" required><br><br>
            <input type="email" name="parentEmail" class="form-control" placeholder="email@example.com">
            
            
        </div>
       
    </fieldset>    
<br>

<!--General Information-->

<br>
<fieldset class="container">
    <legend class="legend">General Information</legend>
    <div>
        <label for="info">What is your</label><br>
        <input type="text" name="studentweight" class="form-control" placeholder="Weight?(kg)">
        <input type="text" name="studentheight" class="form-control" placeholder="Height?(cm)">
    </div><br>
    <div>
        <label for="exerciceinfo">Do you regularly engage in any of
        the following exercises?</label><br>
        <div><input type="checkbox" name="exercise"><label> Walking
        </label><br>
        <input type="checkbox" name="exercise"><label> Running</label>
        </div>
        <div><input type="checkbox" name="exercise"><label> Swimming
        </label><br>
        <input type="checkbox" name="exercise"><label> Biking
        </label></div>
        <div><input type="checkbox" name="exercise"><label> Other(specify)
        </label> &nbsp; <input type="text" class="form-control" width="50px"> <br>
        <input type="checkbox" name="exercise"><label> I don't exercise
        </label></div>
    </div><br>
    <div class="w3-container">
        <label for="sleep">On average, how many hours a day do you
        sleep?</label><br>
        <input type="number" min="1" max="23">
    </div>
    </fieldset>
    <br> <br>
    <div class="container">
    <input class="btn btn-outline-secondary"  name="Submit"type="submit" value="REGISTER"> &nbsp; &nbsp; &nbsp;
    <input class="btn btn-outline-secondary" type="reset" value="RESET">
    </div>
    

</form>
<script src="../js/javasc.js"></script>
 </body>
</html>

