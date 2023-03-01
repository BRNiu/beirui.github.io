<?php
// Login.
// Created on: 20170226
// Created by: Ben Han
// Modified on: 20190311
// Modified by: Ben Han

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['psswd'];
	if($username != 'hancs'){
		print "<font color = red>Oohps, your user name is NOT correct!</font><BR><BR>";
	}elseif($password != '123'){
		print "<font color = red>Oohps, your password is NOT correct!</font><BR><BR>";
	}else{
		//$_SESSION['username'] = $username;
		//$_SESSION['password'] = $password;
		print "Hello world!<BR><BR>";
		print "<a href='htmlExample.html'>Here is my website!</a>";		
	}
}
?>