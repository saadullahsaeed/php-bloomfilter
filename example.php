<?php

require_once 'lib/BloomFilter.php';

$bf = new BloomFilter(100000, 3);

$bf->add('value');  
if ($bf->has('value')) {
  echo "has";
} else {
  echo "nopes";
}