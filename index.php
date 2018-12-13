<?php
use Core\App;
require "vendor/autoload.php";

try{
	$app = new App();
} catch (Exception $e){
	echo 'Ошибка: ', $e->getMessage(), "\n";
}