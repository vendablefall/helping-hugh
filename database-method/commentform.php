<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table width="100%" border="0" cellspacing="2" cellpadding="2" style="background-color:#efefef">
<tr>
<td width="500"><strong>Name</strong></td>
</tr>
<tr>
<td>


 
<label for="txtname"></label>
<input name="txtname" type="text" id="txtname" style="border:none; height:30px; width:300px" required>
</td>
</tr>
<tr>
<td><strong>Comment</strong></td>
</tr>
<tr>
<td>
<label for="txtcomment"></label>
<textarea name="txtcomment" id="txtcomment" cols="80" rows="10" style="border:none" required></textarea>
</td>
</tr>
<tr>
<td style="text-align:top">
<label for="txtcode"></label>
<input name="txtcode" type="text" id="txtcode" style="border:none; height:30px; width:300px;float:left" required>
<img src="captchaimg.php" width="100" height="30" alt="CAPTCHA"/>
<p>
<input type="submit" name="pub" id="pub" value="Submit" />

</p></td>
</tr>
</table>
</form>