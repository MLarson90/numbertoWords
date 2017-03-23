<?php
  include_once __DIR__.'/../vendor/autoload.php';
  include_once __DIR__.'/../src/Number.php';

  session_start();
  $app = new Silex\Application;
  $app->register(new Silex\Provider\TwigServiceProvider(), array ('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app){
    return $app['twig']->render('index.html.twig');
  });

  $app->post("/score", function() use ($app) {
    $user_number = $_POST['user_input'];
    $output_word = new Number;
    return $app['twig']->render('index.html.twig', array('result' => $output_word->name($user_number)));
  });

  return $app;
 ?>
