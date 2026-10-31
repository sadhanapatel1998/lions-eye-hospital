<?php
ob_start();
include('include/data.php');
?>




<?php
$content = ob_get_clean();
require 'layout.php';
?>