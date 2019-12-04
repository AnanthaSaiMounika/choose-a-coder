<?php
session_start();
session_unset();
session_destroy();
echo '<script type="text/javascript">window.location="newlogin-buyer.html";</script>';
?>
