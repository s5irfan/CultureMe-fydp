<?php
//======================================================================
// DATABASE CONFIGURATIONS
//======================================================================

// Local Database Connection Details (in this example, the developer is using a
// ClearDB mysql database that is different than the deployment DB.  You can
// simply use your own MySql DB on your computer.
$host = "us-cdbr-iron-east-04.cleardb.net";
$username = "b2b3a699fe1834";
$password = "42de193a";
$databaseName = "heroku_affe0ae15e94776";

$mySQLConnection = mysqli_connect($host, $username, $password, $databaseName);

$possibleLocalhosts = array('127.0.0.1', "::1");
/* 

if( ! in_array($_SERVER['REMOTE_ADDR'], $possibleLocalhosts)) // If our REMOTE_ADDR is a localhost, do this:
{
	// Production Database Connection Details:
	//$databaseConnectURL = "mysql://bec9224a3c2850:feb6f6a3@us-cdbr-iron-east-04.cleardb.net/heroku_81f997698bd0911?reconnect=true";
	// CLEARDB_DATABASE_URL needs to be set in Heroku.
	$databaseConnectURL = getenv("CLEARDB_DATABASE_URL");

	// Parse our $databaseConnectURL so that we can pull out the key's we neeed
	$parsedDatabaseConnectUrl = parse_url($databaseConnectURL);
	$host = $parsedDatabaseConnectUrl["host"];
	$username = $parsedDatabaseConnectUrl["user"];
	$password = $parsedDatabaseConnectUrl["pass"];
	$databaseName = substr($parsedDatabaseConnectUrl["path"], 1);
} */
if( !	$mySQLConnection = mysqli_connect($host, $username, $password, $databaseName) )
{
    die('No db connection: ' . mysqli_connect_error());
}


//======================================================================
// DATABASE CONNECTION
//======================================================================



//======================================================================
// FRESH DEPLOY DATABASE SETUP WIZARD
//======================================================================


   

/*	if (mysqli_query($mySQLConnection, $sql1))
	{
		echo '</br>StepA: Successfully configured database.</br>';
	}
	else
	{
		echo '</br>StepA: Looks like there was an error :(</br>';
		echo '</br>' . mysqli_error($mySQLConnection);
	}*/

?>
