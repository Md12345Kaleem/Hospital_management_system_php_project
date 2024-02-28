<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <title>Hospital Management</title>
          <style>
            body{
              overflow-x: hidden;
            }
            </style>
</head>
<body background="1.jpg">
          <?php include "navbar.php" ?><br><br>
          <h1 class="offset-4">Name Of Hospital</h1>
<br><br><br>
          <div class="container offset-2">
  <div class="row">
    <div class="col-sm">
      <h3><a href="Doctor.php">Doctor List</a></h3>
    </div>
    <div class="col-sm">
      <h3><a href="Nurse.php">Nurse List</a></h3>
    </div>
    <div class="col-sm">
      <h3><a href="Facility.php">Facility</a></h3>
    </div>
  </div>
</div>

<!--  patient -->
<br><br><br><br>
<div class="container px-lg-5 offset-2">
  <div class="row mx-lg-n5">
    <div class="col">   <h3><a href="Admit_Pateint.php">Admit New Patient</a></h3> </div>
    <div class="col"><h3><a href="Patient.php">Check Patient Details</a></h3> </div>
  </div>
</div>

</body>
</html>