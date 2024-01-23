<?php
    /*
     * Addison Farley
     * January 2024
     * https://addisonfarley.greenriverdev.com/sdev328/diner/index.php
     * This is my controller for the diner app
     */

    //turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //require the autoload file
    require_once ('vendor/autoload.php');

    //instantiate Fat-Free framework (F3)
    $f3 = Base::instance(); //static method

    //define a default route
    $f3->route('GET /', function () {
        //echo 'diner';

        //display view page
        $view = new Template();
        echo $view->render('views/home.html');
    });

    //define a breakfast route
    $f3->route('GET /breakfast', function () {
        //echo 'diner';

        //display view page
        $view = new Template();
        echo $view->render('views/breakfast-menu.html');
    });

    //run fat-free
    $f3->run(); //instance method

