<?php
require('../vendor/autoload.php');

use App\Config;
use PHPUnit\Event\Runtime\PHP;

# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config1 = Config::getInstance();
echo $config1->get('db')['host'];
$config2 = Config::getInstance();

echo PHP_EOL;

var_dump($config1 === $config2); 