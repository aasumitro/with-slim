<?php

/*
|----------------------------------------------------
| Start PHP Session                                 /
|----------------------------------------------------
*/

    session_start();

/*
|----------------------------------------------------
| Register The 3rd Party Library                    /
|----------------------------------------------------
*/

    require_once __DIR__ . ('/../../vendor/autoload.php');

/*
|----------------------------------------------------
| App Helper                                        /
|----------------------------------------------------
*/

    require_once __DIR__ . '/Helper/EnvHelper.php';
    require_once __DIR__ . '/Helper/DumpHelper.php';
    require_once __DIR__ . '/Helper/StringHelper.php';

/*
|----------------------------------------------------
| This Application Setting                          /
|----------------------------------------------------
*/

    $settings = require __DIR__ . '/Settings.php';

    $app = new \Slim\App($settings);

/*
|----------------------------------------------------
| Dependencies File                                 |
|----------------------------------------------------
*/

    require __DIR__  . ('/Dependencies.php');

/*
|----------------------------------------------------
| Dependencies File                                 |
|----------------------------------------------------
*/
    require __DIR__  . ('/Controller.php');

/*
|----------------------------------------------------
| Dependencies File                                 |
|----------------------------------------------------
*/
    require __DIR__  . ('/Middleware.php');

/*
|----------------------------------------------------
| Routers File                                      |
|----------------------------------------------------
*/

    require __DIR__  . ('/../routes.php');
