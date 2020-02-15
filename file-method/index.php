<html>
    <head>
        <title>Comments</title>
    </head>
    <body>

        <form action="write.php" method="post">
            What is your Name?<br>
            <input type="text" name="Name"><br>
            What is your Comment?<br>
            <input type="text" name="Comment"><br>
            <input type="submit" value="Submit">
        </form>

        <?php 
            include 'php/comments.txt';
        ?>

    </body>
</html>