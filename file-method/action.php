<?php
 $path = 'comments.txt';
 if (isset($_POST['name']) && isset($_POST['comment'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['name'].' - '.$_POST['comment'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }

// https://stackoverflow.com/questions/17871483/read-form-text-file-and-write-in-html
 $dbinfo = fopen("comments.txt", "r") or die("Unable to open db!");
 echo $dbinfo,
//  echo '<textarea>', htmlspecialchars($data), '</textarea>';
 fclose($dbinfo);

?>