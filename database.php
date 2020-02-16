<?php 
require "libs/database.php";

R::setup( 'mysql:host=localhost;dbname=theater1',
'root', '' ); //for both mysql or mariaDB


session_start();