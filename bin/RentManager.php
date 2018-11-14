<?php

require __DIR__ . "/../vendor/autoload.php";

use RentManager\Generator\Parser;
use RentManager\Generator\Builder;

chdir(__DIR__ . "/../schema");
$parser = new Parser();
$builder = new Builder($parser);
$builder->build();