<?php

header('Content-type: application/json');

$uri = $_GET['url'] ?? '';
$getParams = http_build_query(array_diff_key($_GET, ['url' => true]));

try {
  print file_get_contents("https://fantasy.premierleague.com/api/$uri?$getParams");
} catch(Exception $e) {
  print ($_SERVER['SERVER_ADDR'] ?? 'Unknown ip');
  print $e->getMessage();
}

return 0;
