

<?php require_once ('config/db.php') ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Lista De Tarefas</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>




<h1>Lista De Tarefas PATRICK</h1>
    <form class="form-group" name="form" action="saveTarefa.php" method="POST">
    <label for="exampleInputEmail1">Nova Tarefa</label>
    <input type="text" name="tarefa" class="form-control" id="exampleInputEmail1" placeholder="Adicionar:Tarefa"></br>
<input type="submit" name="enviar" value="Adicionar" class="btn btn-default"></button>

</form>

<table class="table table-striped">
<ul>
	<?php 

  $query = mysql_query("SELECT * FROM tarefas") or die(mysql_error());
   while ($row = mysql_fetch_array($query, MYSQL_NUM)){





      ?>
<li>

<tr>
<td class="tarefa">Tarefa</td>
</tr>


<td><span><?php echo $row[1];?></span></td>
<th><a href="editar.php?id=<?= $row[0]?>">Editar</a></th>
<th><a href="excluir.php?id=<?= $row[0]?>">Excluir</a></th>
</li>

<?php } ?>


</ul>
</table>




	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>