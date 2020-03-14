<?php
$name_1=$_POST['name_1'];
$name_2=$_POST['name_2'];

echo $name_1;
echo $name_2;

// Open the file to get existing content
$file='testfile.txt';
$current = file_get_contents($file);
// Append a new person to the file
$current .= $name_1.'|'.$name_2."\n";
// Write the contents back to the file
file_put_contents($file, $current);

return 1
?>