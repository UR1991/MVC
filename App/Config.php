<?php
//This is initialization file

define ('DIRSEP', DIRECTORY_SEPARATOR);

//route to main catalog
$sitePath = realpath(dirname(__FILE__) . DIRSEP);
define ('SITE_PATH', $sitePath);
 ?>
