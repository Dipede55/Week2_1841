<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php 
     function retangle($w, $h){
          $area = $w * $h;
          echo ("A rectangle of width $w and height $h has an area of $area.");
     }
     retangle(5, 12);
     ?>
</body>
</html>

