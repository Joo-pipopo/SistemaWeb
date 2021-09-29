<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/consulta.js"></script>
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

                    </thead>
                </table>
                <button type="button" id="btnListar" class="btn btn-primary">Buscar Agendamento</button>
            </div>
        </div>
    </div>
</body>
</html>