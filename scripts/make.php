<?php

include __DIR__ . '/../vendor/autoload.php';

use edwrodrig\site\data\Repository;
use edwrodrig\file_cache\CacheManager;

$data = new Repository;


$cache = new CacheManager(__DIR__ . '/../cache/images');
    $cache->setTargetWebPath('cache/images');

$context = new \edwrodrig\static_generator\Context(__DIR__ . '/../files', __DIR__ . '/../output');
    $context->setRepository($data);
    $context->registerCache($cache);
    $context->setTargetWebDomain('http://www.edwin.cl');
    //$context->setTargetWebPath('es');

    setlocale(LC_ALL, 'es_CL.utf-8');

    $context->generate();


    $cache->save();


