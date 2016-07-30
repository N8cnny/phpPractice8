<?php
if ($_COOKIE["visits"] == " ")
{
$count = 0;
}
else
{
$count=$_COOKIE["visits"];
$count++;
}

setcookie("visits", $count);

print "<p>You visited this site<b>$count</b> times.";

session_start();
print "<p>You visited this site <b>$count</b> times in this session.";

?>