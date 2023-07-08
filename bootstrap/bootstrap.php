<?php

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();

$dotenv->loadEnv(__DIR__ . '/../.env');

require_once 'vendor/blakvghost/juste/src/autoload.php';
