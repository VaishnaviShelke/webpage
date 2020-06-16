<!DOCTYPE html>
<html>
<body bgcolor="gray">

<h1>Welcome to  clouds</h1>

<pre>
<?php

print `ifconfig`;
$file = file_get_contents('url.txt');
echo $file;
echo '<img src="'.$file.'"  width="500" height="600">';
?>
</pre>


</body>
</html>
