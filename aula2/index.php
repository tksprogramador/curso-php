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
<div class="form-group">
    <label for="exampleInputEmail1">Tarefa</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
<input type="submit" name="enviar" value="Enviar" class="btn btn-default"></button>

</div>

<div class="tarefas">
<ul>
	<?php for($i=1;$i <=10; $i++): ?>
<li>
<span>Tarefa 1</span>
<a href="">Editar</a>
<a href="">Excluir</a>
</li>

<?php endfor; ?>


</ul>
	</div>




	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>