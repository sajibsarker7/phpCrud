<?php

 $dbHost = "localhost";
 $dbuser = 'root';
 $dbPass ='';
 $dbName ='rawCode';

 $connect = mysqli_connect($dbHost,$dbuser,$dbPass,$dbName);
 if ($connect == false) {
 	echo '<h2>connection fail</h2>';
}
