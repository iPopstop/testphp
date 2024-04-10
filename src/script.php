<?php
$title = 'PHP';
$document->getElementById('title')->innerText = $title;

$count = 0;

$document
  ->getElementById('counter-button')
  ->addEventListener('click', function () use (&$count, $document) {
      $count += 1;
      $document->getElementById('counter')->innerText = $count;
      echo "count: $count";
  });
