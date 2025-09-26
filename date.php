<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Date php</title>
</head>
<body>
     <?php 
     $theDay = date("l"); // l (lowercase L) means day of the week
     echo "Today is $theDay";
     $theMonth = date("F"); // F means full month name
     echo "<br> The month is $theMonth <br>";
     $t = date("H");

     if ($t < 13) {
          echo "Good morning to you!";
     }
     else {
          echo "Good afternoon to you!";
     }
     ?>
</body>
</html>