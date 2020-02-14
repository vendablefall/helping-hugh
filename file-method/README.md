### File Based DB Idea

This basically takes a users input (index.html) and stores it in a txt file (write.php), it also reads the text file (read.php) and displays the contents (index.html).

### Set up

set-up.sh should do most of the set-up for you.

However I advise you run the commands one by one (manually), and make sure they complete (if you do this, you will have to prepend all of the commands with sudo)

#### .archive

There is an older version of this "file-system" in .archive/ (incase this one doesnt work), if you want to try it replace index.html and copy read.php:

```
mv index.html index.html.old
cp .archive/index.html  ./index.html
cp .archive/read.php  ./read.php
```
