<?php
session_start();
session_unset();
session_destroy();

header("Refresh:1; bsFormLogin.php");
echo "hasta luego";
?>