<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <title>Hospital</title>
</head>
<body>
        <?php include "navbar.php"?>
        <?php include "dbconnect.php"?>
        <img src="https://source.unsplash.com/1361x300/?hospital,college">
<br><br>
<center><h1>Welcome in Hospital Name<br>Doctor List</h1></center>
<br><br><br><br>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Specilist</th>
      <th scope="col">Name</th>
      <th scope="col">Experience</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT * FROM `hospital_magement`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
      $sp = $row['last_name'];
      $nam = $row['name'];
      $exp = $row['experiance'];
    echo '<tr>
      <th scope="row">'.$sp.'</th>
      <td>'.$nam.'</td>
      <td>'.$exp.'</td>
      <td>Detail</td>
    </tr>';
    }
    ?>
  </tbody>
</table

</body>
</html>