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
            $word = $_GET['word'];
            $string = $_GET['string'];
            $new_count = new RepeatCounter;
            $count = $new_count->countRepeats($word, $string);

            $twig_results = array($count, $word, $string);

            return $app['twig']->render('conterresults.html.twig', array('results' => $twig_results));
        });

    return $app;

?>
