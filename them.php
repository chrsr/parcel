<?php
$result = file_get_contents('http://chrsr.iriscouch.com/blip/_design/them/_view/them?group=true');
echo $result;
?>