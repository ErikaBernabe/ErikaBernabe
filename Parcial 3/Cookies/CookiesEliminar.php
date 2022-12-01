<?php
 $today = date('d/m/Y H:i:s');
 setcookie("ultvisita", $today, time() - 3600);
?>