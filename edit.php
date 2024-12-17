<?php 
/*
$file = fopen("data.json", "a+") or die("Unable to open file!");
$fred = fread($file, filesize("data.json"));
$json = json_decode($fred);

var_dump($json);
echo "<hr>";

fclose($file);
*/

$json = json_decode($_POST["x"]);
$file = fopen("test.json", "w") or die ("bad things");
fwrite($file, $json);
fclose($file);

?>