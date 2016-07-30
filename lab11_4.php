<?php
if($_POST)
{
$uid=$_POST["uid"];
$psd=$_POST["psd"];

if (($uid=="jsmith" && $psd=="cis246") || ($uid=="akwu012" && $psd=="cis246"))
{
echo" You are authorized to visit <a href='http://www.reddit.com'>Reddit</a> site.";
session_start();
$_SESSION['uid']=$uid;
$_SESSION['access']= "yes";
}
else
{
echo" You are not authorized!";
}
}
else
{
?>
<html>
<body>
<div style="text-align:center">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
User ID:  <input type="text" name="uid" size="20"><br>
Password:<input type="password" name="psd" size="20"><br>
<input type="submit" value="submit">
</form>
</div>
</body>
</html>
 
<?php
}
?>