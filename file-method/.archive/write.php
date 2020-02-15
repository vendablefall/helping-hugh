<?php
 $path = 'comments.txt';
 if (isset($_POST['Name']) && isset($_POST['Comment'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['Name'].' - '.$_POST['Comment']; // Set the writing format here
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>