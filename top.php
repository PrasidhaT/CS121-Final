<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CS121 Final</title>
        <meta charset="utf-8">
        <meta name="author" content="Prasidha Timsina and Luke Beatty">
        <meta name="description" content="CS121 Final">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css" type="text/css" media="screen">

    </head>
<?php


// This section uses code provided to us during lab 5 where we first fiddled around
// with mariadb and mysql
$user = '';
$password = '';
$db = 'raspberrypi';
$tb = 'my_data';
$host = 'localhost';
if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
}
$link = mysqli_connect($host, $user, $password, $db);
$query = "Select * FROM ".$tb.";";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
//concludes code provided to us during lab 5

?>
<body>
