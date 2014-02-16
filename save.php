<?php // phpinfo() ?>
<?php
$url = 'http://chrsr.iriscouch.com/blip/' . uniqid();
$data = array(
    'session' => $_GET['session'],
    'date' => $_GET['date'],
    'lng' => $_GET['lng'],
    'lat' => $_GET['lat']
);
$json = json_encode($data);
$file = tmpfile();

fwrite($file, $json);
fseek($file, 0);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_PUT, true);
curl_setopt($ch, CURLOPT_INFILE, $file);
curl_setopt($ch, CURLOPT_INFILESIZE, strlen($json));

$result = curl_exec($ch);
fclose($file);
curl_close($ch);
?>