<?php

require_once 'YandexInflector.php';

$inflector = new YandexInflector();
echo $inflector->setFormat('xml')->inflect('Дима');
