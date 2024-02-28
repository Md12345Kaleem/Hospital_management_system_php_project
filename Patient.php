<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <title>Patient List</title>
</head>
<body>

<?php include "navbar.php"?>
<?php include "dbconnect.php"?>
        <img src="https://source.unsplash.com/1361x300/?hospital,college">
<br><br>
<!-- search name of patient -->
<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
$name=$_POST['search'];
$sql = "SELECT * FROM `patient` WHERE `name` LIKE '$name'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
  $na = $row['name'];
  $admitdate = $row['admit_date'];
  $cit = $row['city'];

  echo'<thead><tr>
  <th scope="row">Name = <b>'.$na.'</b></th>
    <td>Admit Date = <b>'.$admitdate.'</b></td>
    <td>city name = <b>'.$cit.'</b></td>
    <td>Detail</td>
  </tr></thead>';
  echo"<br>";
}
}
?><br>
        <nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="Patient.php" method="POST">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search patient details" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>


<br><br>
<center><h1>Welcome in Hospital Name<br>Patient List</h1></center>
<br><br><br><br>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">B.No</th>
      <th scope="col">Name</th>
      <th scope="col">Admit Date</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM `patient`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
      $roomno=$row['room_no'];
      $bed=$row['bed_no'];
      $name=$row['name'];
      $admitdate=$row['admit_date'];
    echo'<tr>
    <th scope="row">R.no='.$roomno.' B.no='.$bed.'</th>
      <td>'.$name.'</td>
      <td>'.$admitdate.'</td>
      <td>Detail</td>
    </tr>';
    }
    ?>
  </tbody>
</table


</body>
</html>