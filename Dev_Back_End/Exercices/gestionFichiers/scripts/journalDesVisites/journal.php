<?php
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d H:i:s");

$file = fopen("journal.txt", "a");
$txt = "$ip" . ' ' . "$date\n";
fwrite($file, $txt);
fclose($file);

// IP Visiteurs
echo $_SERVER['REMOTE_ADDR'] . '<br>';

// Date heure courante : 2024-02-12 18:54:06
echo date("Y-m-d H:i:s") . '<br>';

?>