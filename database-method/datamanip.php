<?php
class DataHandler{
private $con;
private $db;


 
public function DataHandler($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME){
$this->con=mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
if (!$this->con) {
echo "Unable to connect to DB: " . mysql_error();
exit;
}
$this->db=mysql_select_db($DB_NAME,$this->con);
if (!$this->db) {
echo "Unable to select mydbname: " . mysql_error();
exit;
}
}

public function getComments($tblname,$curPage){

$query="SELECT * FROM ".$tblname." WHERE url='$curPage' ORDER BY pdate DESC";
$result=mysql_query($query);
$numrows=mysql_num_rows($result);
$str="";
if($numrows>0) {

$str="<table style='width:100%; border-spacing: 0 2px;' cellspacing='0'>";
while($datarow=mysql_fetch_row($result)){
$str.="<tr style='background-color:#f8f8f8'><td style='vertical-align: top; width: 78%'><img src='noname.png' width='50' height='50' style='float: left'/><p style='color:#ff9933;'>"."&nbsp;".$datarow[1]."</p><p style='padding-left:15px;word-wrap: break-word;'>".$datarow[2]."</p></td>"."<td style='text-align:right; width: 20%; vertical-align: top; border: 0px solid #f8f8f8'>".$datarow[3]."</td></tr>";
}

$str.="</table>";
}

else
$str.="<p><strong>No comments</strong></p>";
return $str;


 
}

public function addComment($na,$com,$cdate,$url){

//prevent injection
// $name=mysqli_real_escape_string($na);
// $comment=mysqli_real_escape_string($com);
//removing to make vulnerable
$name=$na;
$comment=$com;

$query = "INSERT INTO tblcomments(pname,comment,pdate,url) Values('$name','$comment','$cdate','$url')";
$result = mysql_query($query) or die ("Error:Couldn't execute query. Sorry for the inconvenience!\nPlease try again.");
echo "<p><h4 style='color:#0000FF'>Thank you! Your comment has been published.</h4></p>";


}

public function closeConnection(){
mysql_close($this->con);
}

}
?>