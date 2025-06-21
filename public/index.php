<?php

ini_set('memory_limit', '256M');

echo ini_get('memory_limit');

$app = include __DIR__ . "/../src/App/bootstrap.php";

$app->run();

?>