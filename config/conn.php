<?php
/**DO NOT DELETE ANYTHING HERE */
/*
*error reporting
*/

define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);

		ini_set("error_reporting", "true");
		error_reporting(E_ALL | E_STRCT);
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>=')){
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else{
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}




$config = array(
	
	//web information
	"web" => array(
		"info" => array(
			"web_icon" => "assets/images/default/avatar.png",
			"web_title" => "AskMe",
			"web_slogan" => "Ask Everything and get Answer"
		),
		//user information
		"user" => array(
			"user_name" => "Sojeb Sikder",
			"user_email" => "sojebsikder@gmail.com"
		)
	),

	//For Database
	"db" => array(
		"mysql" => array(
			"dbname" => "askme", //DB name
			"username" => "root", //DB user
			"password" => "", //DB Password
			"host" => "localhost", //DB Host
		),
		"mongodb" => array(
			"dbname" => "database1",
			"username" => "dbuser",
			"password" => "pass",
			"host" => "localhost",
		),
		"xmldb" => array(
			"dbname" => "askme", //DB name
			"username" => "root", //DB user
			"password" => "", //DB Password
			"host" => "localhost", //DB Host
		),
	),

	//For urls
	"url" => array(
		"baseUrl" => "/aqaga/"
	),

	//For assets paths
	"paths" => array(
		"resources" => "../resources",

		"images" => array(
			"cover" => "public/assets/images/cover",
			"logo" => "public/assets/images/logo",
			"content" => "public/assets/images/content",
			"upload" => "public/assets/images/upload"
		)
	),

);


/**
 * Important constants DO NOT TOUCH THIS
 * ex. require_once(LIBRARY_PATH. Paginator.php)
 */
defined("DB_HOST")
	or define("DB_HOST", $config['db']['mysql']['host']);

defined("DB_USER")
	or define("DB_USER", $config['db']['mysql']['username']);

defined("DB_PASS")
	or define("DB_PASS", $config['db']['mysql']['password']);

defined("DB_NAME")
	or define("DB_NAME", $config['db']['mysql']['dbname']);


/**
 * For xml Database
 */
/*
defined("DB_HOST")
	or define("DB_HOST", $config['db']['mysql']['host']);

defined("DB_USER")
	or define("DB_USER", $config['db']['mysql']['username']);

defined("DB_PASS")
	or define("DB_PASS", $config['db']['mysql']['password']);

defined("DB_NAME")
	or define("DB_NAME", $config['db']['mysql']['dbname']);
*/
/**
 * System
 */
defined("LIBRARY_PATH")
	or define("LIBRARY_PATH", '../src/lib');


?>