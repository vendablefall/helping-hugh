<?php
 $path = 'comments.txt';
 if (isset($_POST['name']) && isset($_POST['comment'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['name'].' - '.$_POST['comment'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>