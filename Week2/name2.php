<?php 
$name = $_GET ['name'];
echo 'welcome to my website, ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8'). '!';
?>