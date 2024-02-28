<?php
if($_SERVER ['REQUEST_METHOD']=="POST")
{
  $fname=$_POST['f_name'];
  $lname=$_POST['l_name'];
  $gender=$_POST['gender'];
  $nation=$_POST['nation'];
  $marital=$_POST['marital'];
  $Religion=$_POST['religion'];
  $Experiance=$_POST['experiance'];
  $Email=$_POST['email'];
  $Password=$_POST['password'];
  $Date_Birth=$_POST['D_O_B'];
  $Place_Birth=$_POST['POB'];
  $Place_issue=$_POST['POI'];
  $Date_Issue=$_POST['DOI'];
  $Visa=$_POST['visa'];
  $School_ten=$_POST['school_name'];
  $tPercentage=$_POST['perc'];
  $Board=$_POST['tenBoard'];
  $twSchool=$_POST['tschool_name'];
  $twPercentage=$_POST['percen'];
  $twBoard=$_POST['tBoard'];
  $College_name=$_POST['c_name'];
  $Total_percentage=$_POST['t_percentage'];
  $Place_of_college=$_POST['C_place'];
  $city_name=$_POST['city_name'];
  $Distric_name=$_POST['D_name'];
  $State_name=$_POST['s_name'];
  $pin_code=$_POST['pin_code'];
  $Phone_no=$_POST['number'];

  include "dbconnect.php";

  $sql="INSERT INTO `hospital_magement` (`first_name`, `last_name`, `gender`, `nation`, `marital`, `religion`, `experiance`, `email`, `password`, `dob`, `place_of_birth`, `placeissue`, `doi`, `visa`, `number`, `tens`, `tenp`, `tenb`, `tws`, `twp`, `twb`, `collegen`, `collp`, `collpl`, `city`, `distric`, `state`, `pincode`) VALUES ('$fname', '$lname', '$gender', '$nation', '$marital', '$Religion', '$Experiance', '$Email', '$Password', '$Date_Birth', '$Place_Birth', '$Place_issue', '$Date_Issue', '$Visa', '$Phone_no', '$School_ten', '$tPercentage', '$Board', '$twSchool', '$twPercentage', '$twBoard', '$College_name', '$Total_percentage', '$Place_of_college', '$city_name', '$Distric_name', '$State_name', '$pin_code')";
 $result=mysqli_query($conn,$sql);
 if($result)
 {
   echo "data insert successfully ";
 }
 else 
 {
   echo "not insert successfully ".mysqli_error($conn);
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
          <title>Doctor Entry</title>
          <style>
            body{
              overflow-x:hidden;
            }
            </style>
</head>
<body>
<?php include "navbar.php" ?>
          <img src="https://source.unsplash.com/1350x300/?hospital,college">

          <br><br><br><br>

<center><h1>Welcome hospital Campus<br>
Doctor Details</h1></center><br>
          <form class="needs-validation bg-success" novalidate  action="Doctor_Entry.php" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="text" class="form-control" name="f_name" id="validationTooltip01" placeholder="First name" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">last name</label>
      <input type="text" class="form-control" name="l_name" id="validationTooltip01" placeholder="Last name"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Gender</label>
      <input type="text" class="form-control" name="gender" id="validationTooltip01" placeholder="Gender"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nationality</label>
      <input type="text" class="form-control" name="nation" id="validationTooltip01" placeholder="Nationalist" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Marital Status</label>
      <input type="text" class="form-control" name="marital" id="validationTooltip01" placeholder="Marital Status" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Religion</label>
      <input type="text" class="form-control" name="religion" id="validationTooltip01" placeholder="Religion" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Experiance yr</label>
      <input type="text" class="form-control" name="experiance" id="validationTooltip01" placeholder="Enter your exparience yr"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Email</label>
      <input type="text" class="form-control" name="email" id="validationTooltip01" placeholder="Enter your email id" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Password</label>
      <input type="password" class="form-control" name="password" id="validationTooltip02" placeholder="Enter password" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Date of birth</label>
      <input type="date" class="form-control" name="D_O_B" id="validationTooltip01" placeholder="Date of birth"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Place of birth</label>
      <input type="text" class="form-control" name="POB" id="validationTooltip01" placeholder="Place of birth" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Place of issue</label>
      <input type="text" class="form-control" name="POI" id="validationTooltip01" placeholder="Place of issue" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Date of issue</label>
      <input type="date" class="form-control" name="DOI" id="validationTooltip01" placeholder="Date of issue" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Visa status</label>
      <input type="text" class="form-control" name="visa" id="validationTooltip01" placeholder="VISA ID" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Enter your phone</label>
      <input type="text" class="form-control" name="number" id="validationTooltip01" placeholder="Enter your phone" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
    <center><br>
    <h1>Education Qualification</h1>
    <br>
    <h1>Class 10th</h1><br></center>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">School Name</label>
      <input type="text" class="form-control" name="school_name" id="validationTooltip01" placeholder="Enter your school name " required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Percentage</label>
      <input type="text" class="form-control" name="perc" id="validationTooltip01" placeholder="Enter percentage in the of %"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Board</label>
      <input type="text" class="form-control" name="tenBoard" id="validationTooltip01" placeholder="Enter Board Name" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div></div>
    <br>
    <center><h1>Class 12th</h1><br></center>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">School Name</label>
      <input type="text" class="form-control" name="tschool_name" id="validationTooltip01" placeholder="Enter School Name" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Percentage</label>
      <input type="text" class="form-control" name="percen" id="validationTooltip01" placeholder="Enter your percentage " required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Board</label>
      <input type="text" class="form-control" name="tBoard" id="validationTooltip01" placeholder="Enter your board" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
     <center><br><br>
    <h1>Degree</h1>
    <br><br></center>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">College Name</label>
      <input type="text" class="form-control" name="c_name" id="validationTooltip01" placeholder="College Name"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Total Percentage</label>
      <input type="text" class="form-control" name="t_percentage" id="validationTooltip01" placeholder="Total Percentage"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Place of College</label>
      <input type="text" class="form-control" name="C_place" id="validationTooltip01" placeholder="Place of College" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    </div>
    </div> 
  <center> <br><h1>Address</h1><br></center>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">City Name</label>
      <input type="text" class="form-control" name="city_name" id="validationTooltip01" placeholder="City name" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Distric Name</label>
      <input type="text" class="form-control" name="D_name" id="validationTooltip01" placeholder="Distric name" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">State Name</label>
      <input type="text" class="form-control" name="s_name" id="validationTooltip01" placeholder="State name" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Pin code</label>
      <input type="text" class="form-control" name="pin_code" id="validationTooltip01" placeholder="Enter Pin code"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
 <center> <button class="btn btn-primary col-10 " type="submit">Submit form</button></center>
</form>



</body>
</html>