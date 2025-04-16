<?php

$timezone = 'America/New_York';

$layout = 'default';

$plugins = [];

$routes = [
  '/' => [
    'page' => 'home.php',
    'meta' => ['title' => 'Home']
  ],
  '/about' => [
    'page' => 'about.php',
    'meta' => ['title' => 'About']
  ],
  '/contact' => [
    'page' => 'contact.php',
    'meta' => ['title' => 'Contact']
  ],
  '/donate' => [
    'page' => 'donate.php',
    'meta' => ['title' => 'Donate']
  ],
  '404' => 'notFound.php'
];