<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Counter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get('/', function() use ($app){

       return $app['twig']->render('form.twig');
    });

    $app->post('/user_results', function() use ($app){

        $search = new RepeatCounter;
        $counter = $search->countRepeats($_POST['string'], $_POST['search']);

        return $app['twig']->render('results.twig', array('count' => $counter));
    });

    return $app;

 ?>
