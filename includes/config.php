<?php

ob_start(); // turns on output buffering
session_start();

date_default_timezone_set("Europe/Belgrade");

try {
    $con = new PDO("mysql:dbname=netflix-clone;host=localhost", "root", "password");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}