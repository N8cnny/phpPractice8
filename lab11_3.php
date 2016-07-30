<?php
session_start();
$sessionId = session_id();

if (!isset($_SESSION["count"]))
{
$_SESSION['count']= 0;
$_SESSION['start'] = time();
}
else
{
$_SESSION['count']= $_SESSION['count'] +1;
}
?>

<html>
<body>
<p>this page is in the session of <b>(<?=$sessionId?>)</b></p>
<p>you visited the site <?=$_SESSION['count']?> times</p>
<p>this seesion has lasted <?php echo (time() - $_SESSION['start']); ?> seconds.
</body>
</html>