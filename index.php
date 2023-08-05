<?php

use App\Main;

require __DIR__ . '/vendor/autoload.php';


require __DIR__ . '/src/main.php';

$app = new Main();
/**
 * appelle main function
 * @param array @argv liste des parametres
 */
$app->main($argv);

