<!-- <!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Search</title>
</head>
<body>
          
</body>
</html> -->

<?php
$name = $_POST[''];

$sql = "SELECT * FROM `hospital`.`nurselist` WHERE (CONVERT(`fname` USING utf8) LIKE '%kaleem%' OR CONVERT(`lname` USING utf8) LIKE '%kaleem%' OR CONVERT(`gender` USING utf8) LIKE '%kaleem%' OR CONVERT(`nation` USING utf8) LIKE '%kaleem%' OR CONVERT(`marital` USING utf8) LIKE '%kaleem%' OR CONVERT(`religion` USING utf8) LIKE '%kaleem%' OR CONVERT(`experiance` USING utf8) LIKE '%kaleem%' OR CONVERT(`email` USING utf8) LIKE '%kaleem%' OR CONVERT(`password` USING utf8) LIKE '%kaleem%' OR CONVERT(`dob` USING utf8) LIKE '%kaleem%' OR CONVERT(`pob` USING utf8) LIKE '%kaleem%' OR CONVERT(`poi` USING utf8) LIKE '%kaleem%' OR CONVERT(`doi` USING utf8) LIKE '%kaleem%' OR CONVERT(`visa` USING utf8) LIKE '%kaleem%' OR CONVERT(`tens` USING utf8) LIKE '%kaleem%' OR CONVERT(`tenp` USING utf8) LIKE '%kaleem%' OR CONVERT(`tenb` USING utf8) LIKE '%kaleem%' OR CONVERT(`tws` USING utf8) LIKE '%kaleem%' OR CONVERT(`twp` USING utf8) LIKE '%kaleem%' OR CONVERT(`twb` USING utf8) LIKE '%kaleem%' OR CONVERT(`colln` US[...]";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
   $name = $row['']; 
   $lname = $row[''];
   $      
}
?>