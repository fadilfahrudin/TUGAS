<!doctype html>
<html>
<body>
<?php
$file = fopen("test1.txt","r");
while(! feof($file))
 {
 echo fgets($file). "<br />";
 }
fclose($file);
?> 

</body>
</html>