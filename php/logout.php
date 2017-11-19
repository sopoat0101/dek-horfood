<?php
session_start();
session_destroy();
echo "<script>alert(' You are Logging Out - To The Homepage ' );window.location='../web/index.php';</script>";
?>