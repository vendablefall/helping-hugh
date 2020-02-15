<html>
    <head>
        <title>Comments</title>
    </head>
    <body>

<text>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed ipsum sed leo cursus facilisis. Nullam tincidunt varius neque nec scelerisque. Nam finibus tellus augue, sit amet dapibus est rutrum a. Nulla scelerisque erat ut consequat faucibus. In lorem sem, suscipit eget tincidunt at, auctor vel felis. Ut feugiat eu justo tincidunt facilisis. Suspendisse at vehicula neque. Vivamus lacus ex, volutpat at odio a, condimentum auctor quam. Donec nec lorem ultrices, congue dui quis, feugiat leo. Vivamus ac dolor eu arcu congue tempus sit amet quis orci.
    <br><br>
    Fusce eget scelerisque mauris, nec semper arcu. Phasellus vel malesuada nisl. Etiam tempus convallis nunc eu bibendum. Nullam convallis metus ac nulla dictum, in feugiat lorem aliquet. Morbi euismod vitae arcu nec bibendum. Nulla est mauris, tempus sed nulla id, sollicitudin egestas felis. Praesent at augue arcu. Proin facilisis enim vestibulum orci pulvinar, et efficitur nulla volutpat. Sed tempor nibh ut ipsum hendrerit, ut porttitor nunc ultricies.
    <br><br>
    Nunc cursus sodales egestas. Vestibulum dignissim nulla ac eleifend tristique. Nulla facilisi. Quisque ultricies pretium erat, at pharetra lacus molestie id. Pellentesque eget leo nisl. Vivamus faucibus, ex at placerat euismod, odio ligula malesuada massa, et posuere ante augue nec orci. Integer eget dui molestie, rhoncus magna nec, feugiat nibh. Nunc laoreet lacinia mi, a imperdiet tellus vehicula eget.
    <br><br>
    Quisque semper ultrices orci in porta. Pellentesque in ex nulla. Integer ac urna venenatis, accumsan leo pulvinar, pretium massa. Suspendisse commodo nulla a ipsum vulputate congue. Nulla facilisi. Mauris ligula ipsum, volutpat in urna non, dignissim posuere velit. Maecenas id turpis scelerisque, dapibus metus eget, scelerisque erat. Fusce vulputate ipsum enim. Phasellus a arcu non turpis efficitur placerat.
    <br><br>
    In hac habitasse platea dictumst. Quisque maximus, metus id dignissim sagittis, risus augue facilisis leo, ut eleifend diam magna sit amet nisl. Etiam vestibulum mauris id metus faucibus pharetra. Nullam magna mauris, dapibus facilisis lorem vitae, porttitor faucibus metus. Fusce eleifend metus at mi tincidunt, quis placerat enim sollicitudin. Morbi ac arcu eu odio malesuada convallis. Mauris hendrerit iaculis enim, a malesuada ex. Suspendisse congue non lorem nec rhoncus. Nullam luctus, dui at vehicula vestibulum, orci purus varius lorem, sed luctus dolor enim in diam. Pellentesque faucibus enim non ex consequat, eget lacinia quam blandit. Nunc fermentum sit amet leo in fermentum. Fusce quam quam, ultricies nec metus vitae, ornare malesuada nisl. Fusce efficitur venenatis erat, et maximus libero congue sed.
</text>
<br>
<br>
        <form action="write.php" method="post">
            <b>Leave a Comment!</b><br>
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