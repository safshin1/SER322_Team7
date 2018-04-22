<?php
/**
 * Configuration for database connection
 *
 */

$host       = "localhost";
$username   = "petsplosion";
$password   = "petsplosion";
$dbname     = "petsplosion"; 
$dsn        = "mysql:host=$host;dbname=$dbname"; 
$options    = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);