<?php
require_once 'ElasticExample.php';
require_once 'ClientFactory.php';
require 'vendor/autoload.php';

use App\ElasticExample;

// Elasticsearch
$elastic = new ElasticExample();
// echo $elastic->indexDocument('products', 1, ['title' => 'Milk', 'Manufacturer' => 'OAO']);
echo $elastic->search('products', ["title" => 'Milk']);
// echo $elastic->indexDocument('products', 2, ['title' => 'КиндерПингвик', 'Manufacturer' => 'Nestle']);
echo $elastic->search('products', ["Manufacturer" => 'OAO']);


