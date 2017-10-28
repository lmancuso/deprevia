<?php require_once("..\soporte.php");?>
<?php

$auth->logout();
header("Location:../login.php");exit;
?>