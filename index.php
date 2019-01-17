<?php
require_once('ApiClient/Client.php');
if (!isset($_SESSION['api'])){
    header("Location: login.php");
}else{
    header("Location: dashboard.php");
}
exit();
?>
