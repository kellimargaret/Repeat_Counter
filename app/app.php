<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(),
    array('twig.path' =>__DIR__.'/../views'));

    //Home form page
    $app->get('/', function() use ($app) {
        return $app['twig']->render('counterform.html.twig');
    });

        //Matched results page
        $app->get('/results', function() use ($app) {
            $new_count = new RepeatCounter;
            $count = $new_count->countRepeats($_GET['word'], $_GET['string']);
            return $app['twig']->render('counterresults.html.twig', array('results' => $count));
        });

    return $app;

?>
