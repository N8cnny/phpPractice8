<?php
if($_POST)
{
session_start();

$_SESSION["fullname"] = $_POST["fullname"];

echo "Welcome " . $_SESSION["fullname"] . "!<br>";
echo "<a href=lab11_2_1.php>NextPage</a>";
}
else
{
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
What is your name?
<input type="text" name="fullname">
<input type="submit" value= "Go">
</form>

<?php
}
?>
