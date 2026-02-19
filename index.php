<?php

$uri = $_GET['url'] ?? '';
$baseUrl = $_GET['base_url'] ?? '';
$getParams = http_build_query(array_diff_key($_GET, ['url' => true, 'base_url' => true]));

try {
    header('Content-type: application/json');
    if ($baseUrl) {
        print file_get_contents("$baseUrl/$uri?$getParams");
        return 0;
    }
    print file_get_contents("https://fantasy.premierleague.com/api/$uri?$getParams");
} catch(Exception $e) {
    print ($_SERVER['SERVER_ADDR'] ?? 'Unknown ip') . '<br>';
    print "https://fantasy.premierleague.com/api/$uri?$getParams" . '<br>';
    print $e->getMessage();
}

return 0;
