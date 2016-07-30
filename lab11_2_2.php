<?php

session_start();
echo "i still know your username: " . $_SESSION["fullname"];
echo " | <a href='lab11_2_1.php'>Previous</a>";
echo "<iframe src='http://www.reddit.com' width=100%></iframe>";

session_destroy();
?>