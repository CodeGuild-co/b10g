<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->get('/posts/{name}/', function($name) use($app) {
    $app['monolog']->addDebug('posts/' . $name . '.twig');
    return $app['twig']->render('posts/' . $name . '.twig');
});

$app->get('/subscribe/{name}/', function($name) use($app) {
    $app['monolog']->addDebug('subscribe/' . $name . '.twig');
    return $app['twig']->render('subscribe/' . $name . '.twig');
});




/**
 * Create an empty text file called counterlog.txt and 
 * upload to the same directory as the page you want to 
 * count hits for.
 * 
 * Add this line of code on your page:
 * <?php include "text_file_hit_counter.php"; ?>
 */

// Open the file for reading
$fp = fopen("counterlog.txt", "r");

// Get the existing count
$count = fread($fp, 1024);

// Close the file
fclose($fp);


// Reopen the file and erase the contents
$fp = fopen("counterlog.txt", "w");

// Write the new count to the file
fwrite($fp, $count);

// Close the file
fclose($fp);



$app->run();
