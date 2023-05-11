<?php

use Online\HomeWork\Bait;
use Online\HomeWork\Fisherman;
use Online\HomeWork\Line;
use Online\HomeWork\Reel;

require_once __DIR__ . '/vendor/autoload.php';

$real = new Reel();
$line = new Line();
$bait = new Bait();

$fishman = new Fisherman();
$fishman->assembleRod( $real, $line, $bait );
var_dump( $fishman->castRod() );
