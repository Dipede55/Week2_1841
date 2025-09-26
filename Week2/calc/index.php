<?php 
if (!isset($_POST['val1'])) {
     include 'templates/form1.html.php';
} elseif (!is_numeric($_POST['val1']) || !is_numeric($_POST['val2'])) {
     include 'templates/error.html.php';
}
else {
     $val1 = $_POST['val1'];
     $val2 = $_POST['val2'];
     $calc = $_POST['calc'];

     switch ($calc) {
          case "add": $result = $val1 + $val2;
               break;
          case "sub": $result = $val1 - $val2;
               break;
          case "mul": $result = $val1 * $val2;
               break;
          case "div": 
               if ($val2 == 0) {
                    $result = "Error: Division by zero";
               } else {
                    $result = $val1 / $val2; 
               }    
               break;
     }
     $output = "Calculation result: " . $result;
     include 'templates/result.html.php';
}
?>

