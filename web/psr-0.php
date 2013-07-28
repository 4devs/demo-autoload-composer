<?php

// Example of usage Composer's autoload psr-0 key

require '../vendor/autoload.php';

// namespaced class usage example

use NS\Badge;

$badge = new Badge('Good reader');

// Do you want this badge? Read article to the end :)

// PEAR compatible class usage example

$intFilter = new Filter_Integer();
$externalData = 'Not an integer...';

echo 'filtered: ' . $intFilter->filter($externalData);