<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=81il81hayat",'root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>