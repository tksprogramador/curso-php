<?php 

require_once('config/db.php');


$tarefa  =  $_POST['tarefa'];
$created = date("Y-m-d H:i:s");
$updated  = date("Y-m-d H:i:s");


$insert = mysql_query("INSERT INTO tarefas (tarefa,	created_at,updated_at) 
	     VALUES ('$tarefa', '$created', '$updated')") or die (mysql_error());

   echo"<script type='text/javascript'>
        location.href='index.php'
      alert('Adicionado Com Sucesso')
      </script>";


 ?>