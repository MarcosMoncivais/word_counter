<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/word_counter.php";
  
  $app = new Silex\Application();
  
  $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
  
  $app->get("/", function () use ($app) {
    return $app['twig']->render('home.twig');
  });
  
  $app->get("/result", function () use ($app) {
    $my_RepeatCounter = new RepeatCounter;
  
    $input1 = $_GET['keyword'];
  
    $input2 = $_GET['searchstring'];
  
    $result = $my_RepeatCounter->countRepeats($input1, $input2);
  
    return $app['twig']->render('result.twig', array(
      'keyword'=> $input1,
      'searchstring'=> $input2,
      'result' => $result));
  });
  
  return $app;
?>