<?php
// mkdir -p /var/www/html/u/ukloads; chmod 0777 /var/www/html/u/ukloads
$rawukload = $_FILES['userfile']['tmp_name'];
$target_out = '/var/www/html/s/s/' . basename($_FILES['userfile']['name']);

if(file_exists($target_out))
unlink($target_out);
move_uploaded_file($rawukload, $target_out);
?> <a href="s/">s/</a>
