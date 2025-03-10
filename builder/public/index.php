<?php
require('../vendor/autoload.php');


# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête

use App\MySQLQueryBuilder;
use App\LitteralBuilder;

$queryBuilder = new MySQLQueryBuilder();
$literralBuilder = new LitteralBuilder();

// SELECT * FROM users
$query = $queryBuilder->select('*')->from('users')->getQuery();
echo $query . PHP_EOL; 

// SELECT name, email FROM users WHERE age > 18
$query = $queryBuilder->select('name, email')->from('users')->where('age > 18')->getQuery();
echo $query . PHP_EOL; 

// Je selectionne * de la table users
$query = $literralBuilder->select('*')->from('users')->getQuery();
echo $query . PHP_EOL;

// Je selectionne name, email de la table users où age > 18
$query = $literralBuilder->select('name, email')->from('users')->where('age > 18')->getQuery();
echo $query . PHP_EOL;

