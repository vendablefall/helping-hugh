

<html>
    <head>
        <title>Comments</title>
    </head>
    <body>



      <?php
         $path = 'php/comments.txt';
         console.log("Testing IF statement");
         if (isset($_POST['Name']) && isset($_POST['Comment'])) {
            console.log("Opening FiuleHandle");
            $fh = fopen($path,"a+");
            $string = $_POST['Name'].' - '.$_POST['Comment'].'<br>'; // Set the writing format here
            fwrite($fh,$string); // Write information to the file
            console.log("Closing Handle");
            fclose($fh); // Close the file
         }
      ?>

        <text>
           <b>
           ThankYou for posting a comment!!
         </b>
         <br>
         <br>
         <a href="index.php">Back to Comments Section</a>
         </text>

    </body>
    </html>