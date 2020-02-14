<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comment</title>
<style>

 
#pub{
background:#09C;
height:30px;
width:100px;
text-align:center;
padding-top:3px;
border-style:none;
color:#ffffff;
font:bold;
border-radius: 23px;
}
#pub:hover{
background:#666
}


</style>
<?php
//include datamanip file
include("datamanip.php");

//start session
session_start();
?>
</head>
<body>
<?php
//create DataHandler object
$dhandler=new DataHandler("localhost","test","test","commentdb");

//get the visited page url
$curPage=$_SERVER["REQUEST_URI"];
//read comments
echo $dhandler->getComments("tblcomments",$curPage);
//include comment form
include("commentform.php");
//the pub button is pushed to submit comment
if(isset($_REQUEST['pub'])){
     if($_REQUEST['txtcode']==$_SESSION['security_code']){
       $today=date("Y:m:d H:i"); //get the current date and time       
       $dhandler->addComment($_REQUEST['txtname'],$_REQUEST['txtcomment'],$today,$curPage);
     }
  else{
     echo "<p style='color:#ff0000'>Invalid code</p>";
     exit;
  }
}
$dhandler->closeConnection();
?>

</body>
</html>