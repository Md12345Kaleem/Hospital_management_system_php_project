<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Message</title>
</head>
<body>
         <form action="sms.php" method="post">
                   <input type="text" name="number" placeholder="Enter number"/><br>
                   <input type="text" name="text" placeholder="enter message"/><br>
                   <input type="submit" value="send" name-"submit">
         </form> 
</body>
</html>

<?php 
if(isset($_POST['submit']))
{
          $number=$_POST['number'];
          $text =$_POST['text'];
          
}
?>