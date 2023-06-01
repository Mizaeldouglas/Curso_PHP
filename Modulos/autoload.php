<?php

spl_autoload_register(function ($classes) {
  $baseDir = __DIR__ . '/classes/';

  $file = $baseDir . str_replace('\\', '/', $classes) . '.php';


  if (file_exists($file)) {
    require "classes/" . $classes . ".php";
  }
});
