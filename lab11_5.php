<?php
$username='cis407';
$password = 'sapphire';
$time= time();

if($_POST)
{
if($_POST[user] && $_POST[pass])
{
  if($_POST[user]==$username && $_POST[pass]==$password)
   {
    setcookie("user", md5($_POST[user]), $time+3200);
    setcookie("pass", md5($_POST[pass]), $time+3200);
    header("Location: http://www.reddit.com");
}
else
{
$login_error=true;
echo "Incorrect credentials";
}
}
}

else{
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=post>
<table align=center style="font-family:arial; font-size:12; border:1px solid #000000;">
<tr> <td colspan=2 align=center bgcolor="#abcdef">Login</td></tr>
<tr> <td align=right>Username: </td><td><input type=text name=user size=15> </td></tr>
<tr> <td align=right>password: </td><td><input type=password name=pass size=15></td></tr>
<tr> <td align=center colspan=2><input type=submit value="login"></td></tr>
</table>
</form>
<?php
}
?>