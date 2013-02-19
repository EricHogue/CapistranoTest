<?php

echo 'IN';


require __DIR__ . '/../vendor/autoload.php';

$init = new \RDM\Init;
echo $init->doSomething();
