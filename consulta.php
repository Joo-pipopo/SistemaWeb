<?php
require_once("controllerCadastro.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="format-detection" content="telephone=no"> <meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover"> <meta name="color-scheme" content="light dark"> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" href="css/estilo.css">
    <script>
		function confirmDelete(delUrl) {
  			if (confirm("Deseja apagar o registro?")) {
   				document.location = delUrl;
	        }  
		}
	</script>


    <title>Consulta</title>

</head>
<body>

    <div class="container">
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">Sistema Web</a>              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Cadastrar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="consulta.html">Consultar</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="row">
          <div class="card mb-3 col-12">
            <div class="card-body">
                <h5 class="card-title">Consultar - Contatos Agendados</h5>
                <table class="table table-responsive table-hover col-12" style="width: auto;">
                    <thead class="table-active bg-gray">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Origem</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Observação</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <thead id="TableData">
                    <?php
						     $controller = new ControllerCadastro();
						    	$resultado = $controller->listar(0);
						  	for($i=0;$i<count($resultado);$i++){ 
						?>
                    </thead>

                    <tr>
									<td scope="col"><?php echo $resultado[$i]['nome']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['telefone']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['origem']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['data_contato']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['observacao']; ?></td>
									<td scope="col">
										<button type="button" class="btn btn-outline-primary" onclick="location.href='editar.php?id=<?php echo $resultado[$i]['id']; ?>'" style="width: 72px;">Editar</button>
										<button type="button" class="btn btn-outline-primary" onclick="javascript:confirmDelete('excluir.php?id=<?php echo $resultado[$i]['id']; ?>')" style="width: 72px;">Excluir</button>
									</td>
								</tr>
                <?php
							}
						?>

                </table>
            </div>
        </div>
    </div>
</body>
</html>