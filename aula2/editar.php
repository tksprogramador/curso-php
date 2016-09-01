<?php require_once ('config/db.php') ;

$id = $_GET['id'];

$query = mysql_query("SELECT * FROM tarefas WHERE id = $id") or die (mysql_error());


$result = mysql_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Tarefa : <?php= $result['tarefa']?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>




<h1>Lista De Tarefas PATRICK</h1>
    <form class="form-group" name="form" action="update-tarefa.php" method="POST">
    <label for="exampleInputEmail1">Nova Tarefa</label>
    <input type="hidden" name="id" value="<?= $result['id'];?>">
    <input type="text" name="tarefa" value="<?= $result['tarefa'];?>" class="form-control" id="exampleInputEmail1" placeholder="Adicionar:Tarefa"></br>
<input type="submit" name="enviar" value="Editar" class="btn btn-default"></button>

</form>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>