<?php 


$usuario = 'root';
$senha   = '';
$host    = 'localhost';
$banco   =  'curso-php';


$conexao = mysql_connect($host,$usuario,$senha) or die(mysql_error());

$selectBanco = mysql_selectdb($banco) or die (mysql_error());





?>