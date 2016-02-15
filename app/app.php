<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LeetspeakGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/translate_submit", function() use ($app) {
        $my_LeetspeakGenerator = new LeetspeakGenerator;
        $result = $my_LeetspeakGenerator->translate($_GET['phrase']);

        return $app['twig']->render('index.html.twig', array(
            'result' => $result
        ));
    });

    return $app;
?>
