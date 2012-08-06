<?php
IF(!isset($_POST['size']))
	$_POST['size']=0;
IF(!isset($_POST['message']))
	$_POST['message']=''; 
?>
<html> 
</head>
<body>
Click <A href="../doc/help.html" target="_blank">here</A> to see the mathematical syntax to respect.

 
<form name="forme1" method="POST" action="<?Php echo $_SERVER['PHP_SELF'];?>">
<TEXTAREA NAME="message" COLS="80" ROWS="10">
<?Php 
echo stripslashes($_POST['message']); 
	if($_POST['message']=='') 
		echo "<m>3+4^{5}</m>"; 
?>
</TEXTAREA>
<p>
<input type="button" name="efface" value="Delete" onclick="document.forme1.message.value='';">
Font Size :&nbsp;
<input type="text" name="size" size="2" value="<?Php echo $_POST['size']; ?>">
<input type="submit" name="bouton" value="See">
</p>
</form>
 
<div id="contentlabel">Result</div>
<?Php
include("../mathpublisher.php") ;
$message=$_POST['message'];
$size=$_POST['size'];
if ((!isset($size)) || $size<10) $size=14;
if ( isset($message) && $message!='' ) 
	{
	echo("<div style=\"font-family : 'Times New Roman',times,serif ; font-size :{$size}pt;\">".mathfilter($message,$size,"../img/")."</div>");
	}
?>
<div id="footer">
<p><A href="http://www.xm1math.net/phpmathpublisher/">PhpMathPublisher</A> - Copyright 2005 <b>
Pascal Brachet - France</b> 
<br>The author is a teacher of mathematics in a French secondary school (Lycée Bernard Palissy - Agen).<br>
This program is licensed to you under the terms of the GNU General Public License Version 2 as published by the Free Software Foundation.</p>
</div>
</body>
</html>
