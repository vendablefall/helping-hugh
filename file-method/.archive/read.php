<?php


// https://stackoverflow.com/questions/17871483/read-form-text-file-and-write-in-html
 $dbinfo = fopen("comments.txt", "r") or die("Unable to open db!");
 echo $dbinfo,
//  echo '<textarea>', htmlspecialchars($data), '</textarea>';
 fclose($dbinfo);


?>