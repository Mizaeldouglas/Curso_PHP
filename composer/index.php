<?php
require "vendor/autoload.php";

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('Teste.log', Level::Warning));

// add records to the log
$log->warning('Mizael');
$log->error('Douglas');