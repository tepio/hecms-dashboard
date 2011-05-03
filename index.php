<?php

date_default_timezone_set('America/Chicago');

// Load menu
ob_start();
include 'menu.html';
$menu = ob_get_contents();
ob_end_clean();

// Load dashboard
ob_start();
include 'dashboard.html';
$content = ob_get_contents();
ob_end_clean();

include 'theme.html';

?>
