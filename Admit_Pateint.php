<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
          $nam = $_POST['name'];
          $DOB = $_POST['dob'];
          $gend = $_POST['gender'];
          $admit = $_POST['admit_date'];
          $bedno = $_POST['bed_no'];
          $room = $_POST['room_no'];
          $caste = $_POST['religion'];
          $phone = $_POST['phone_no'];
          $email = $_POST['ml'];
          $adhar = $_POST['adhar_no'];
          $pass = $_POST['password'];
          $citys= $_POST['city'];
          $districs = $_POST['distric'];
          $pin = $_POST['pin'];
          $stat = $_POST['state'];

          include "dbconnect.php";

          $sql1 ="INSERT INTO `patient` (`name`, `dob`, `gender`, `admit_date`, `bed_no`, `room_no`, `caste`, `phone`, `adhar_no`, `eml`, `password`, `city`, `distric`, `state`, `pincode`) VALUES ('$nam', '$DOB', '$gend', '$admit', '$bedno', '$room', '$caste', '$phone', '$adhar', '$email', '$pass', '$citys', '$districs', '$stat', '$pin')";
        $result = mysqli_query($conn,$sql1);
        if($result)
        {
          echo "inserted successfully ";
        }
        else 
        {
          echo "not inserted successfull".mysqli_error($conn);
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <title>New Patient List</title>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <style>
          body{
                    overflow-x: hidden;
                    background-color:green;
          }
          .carousel-item
          {
            background:no-repeat scroll center scroll;
                    -webkit-background-size:cover;
                    background-size:cover;
          }
          </style>
</head>
<body>

          <?php include "navbar.php"?>
          <?php include "dbconnect.php"?>
          <!-- crausal -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                              <div class="carousel-item active">
                                        <img src="https://source.unsplash.com/2400x700/?apple,code"
                                                  class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                        <img src="https://source.unsplash.com/2400x700/?programmers,microsoft"
                                                  class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                        <img src="https://source.unsplash.com/2400x700/?coding,apple"
                                                  class="d-block w-100" alt="...">
                              </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                    </a>
          </div><br><br>

         <center><h1>Patient Information</center>
         <br>

         <form class="needs-validation" novalidate action="Admit_Pateint.php" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Enter Patient Name</label>
      <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="Enter Patient Name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Date of birth of Patient</label>
      <input type="date" class="form-control" name="dob" id="validationCustom01" placeholder="Enter Patient DOB" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-1">
      <label for="validationCustom01">Enter Patient Gender</label>
      <input type="text" class="form-control"  name="gender" id="validationCustom01" placeholder="Enter gender" required>
      <!-- <input type="radio" class="form-control" value="male" name="gender" id="validationCustom01" placeholder="Enter gender" value="female" required> -->
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Enter Patient Date</label>
      <input type="date" class="form-control" name="admit_date" id="validationCustom01" placeholder="Enter Date"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Enter Bed no</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Bed no" name="bed_no" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Enter Room No</label>
      <input type="text" class="form-control" name="room_no" id="validationCustom01" placeholder="Enter room no"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Enter Patient Religion</label>
      <input type="text" class="form-control" name="religion" id="validationCustom01" placeholder="Enter patient religion" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Enter Phone no</label>
      <input type="text" class="form-control" name="phone_no" id="validationCustom01" placeholder="Enter phone no" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Enter AdharCard no </label>
      <input type="text" class="form-control" id="validationCustom01" name="adhar_no" placeholder="Enter adhar no" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Enter Email Address</label>
      <input type="email" class="form-control" name="ml" id="validationCustom02" placeholder="Enter Email Address" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Enter Password</label>
      <input type="password" class="form-control" name="password" id="validationCustom02" placeholder="Enter password" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

  </div>
  <br><br>
    <center><h1> Patient Address </h1></center>

    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Enter patient city name</label>
      <input type="text" class="form-control" name="city" id="validationCustom01" placeholder="Enter city name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Distric Name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Distric name" name="distric" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">State Name</label>
      <input type="text" class="form-control" name="state" id="validationCustom01" placeholder="Enter state name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Pin Code</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Pin Code"  name="pin" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
   
</div>

  </div>
 
  <button class="btn btn-primary col-10 offset-1" type="submit">Submit form</button>
</form>

</body>
</html>