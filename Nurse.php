<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <title>Nurse List</title>
</head>
<body>
<?php include "navbar.php"?>
<?php include "dbconnect.php"?>
        <img src="https://source.unsplash.com/1361x300/?hospital,college">
<br><br>
<center><h1>Welcome in Hospital Name<br>Nurse List</h1></center>
<br><br><br><br>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Dept.No</th>
      <th scope="col">Name</th>
      <th scope="col">Experience</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM `nurselist`"; 
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
      $dep = $row['lname'];
      $nam = $row['fname'];
      $exp = $row['experiance'];
   echo' <tr>
      <th scope="row">'.$dep.'</th>
      <td>'.$nam.'</td>
      <td>'.$exp.'</td>
      <td>Details</td>
    </tr>';
}
    ?>
  </tbody>
</table   
</body>
</html>