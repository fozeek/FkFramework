<?php

use Fk\Db\DbConnect;

/*
  Configuration des comptes de base de données
 */

DbConnect::addUser("default", array(
    "host" => "localhost",
    "user" => "root",
    "password" => "root",
    "prefix" => "",
    "database" => "fkframework",
));

DbConnect::addUser("wamp", array(
    "host" => "localhost",
    "user" => "root",
    "password" => "",
    "prefix" => "",
    "database" => "fkframework",
));

DbConnect::connect("default");