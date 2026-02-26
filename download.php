<?php
$file = "counter.txt";
$count = file_exists($file) ? file_get_contents($file) : 0;
$count++;
file_put_contents($file, $count);

header("Location: Application/92Pak Vip Hack.apk");
exit();
?>
