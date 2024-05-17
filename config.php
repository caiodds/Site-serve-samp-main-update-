<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','usuarios');

$con = new mysqli(HOST,USER,PASS,BASE);

if ($con == true) {
    echo 'Conectado com sucesso';
} 
?>