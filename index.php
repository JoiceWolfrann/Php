<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>

<body>
        <div class="container">
          <div class="jumbotron">
            <div class="row">
                <h2>Filmes de Primeira </h2>
            </div>
          </div>
            </br>
            <div class="row" >
				<br>
				<h3>Filmes</h3>
				<p>
                    <a href="cadastro.html" class="btn btn-success">Adicionar</a>
				</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
							<th scope="col">Id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Data de lançamento</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Duração</th>
                            <th scope="col">Diretor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'classes/Conexao.php';
                        $pdo = Conexao::conectar();
                        $sql = 'SELECT * FROM conteudos WHERE tipo = "f" ORDER BY id';
                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
							echo '<th scope="row">'. $row['id'] . '</th>';
							echo '<td>'. $row['titulo'] . '</td>';
                            echo '<td>'. $row['data_lancamento'] . '</td>';
							echo '<td>'. $row['genero'] . '</td>';
							echo '<td>'. $row['duracao'] . '</td>';
							echo '<td>'. $row['diretor'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn btn-danger" href="excluir.php?id='.$row['id'].'">Excluir</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Conexao::desconectar();
                        ?>
                    </tbody>
                </table>
			</div>
			<div class="row" >
				<br>
				<h3>Séries</h3>
				<p>
                    <a href="cadastroSerie.html" class="btn btn-success">Adicionar</a>
				</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Data de lançamento</th>
                            <th scope="col">Gênero</th>
							<th scope="col">Temporadas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'classes/Conexao.php';
                        $pdo = Conexao::conectar();
                        $sql = 'SELECT * FROM conteudos WHERE tipo = "s" ORDER BY id';
                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                echo '<th scope="row">'. $row['id'] . '</th>';
                            echo '<td>'. $row['titulo'] . '</td>';
                            echo '<td>'. $row['data_lancamento'] . '</td>';
                            echo '<td>'. $row['genero'] . '</td>';
							echo '<td>'. $row['temporadas'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn btn-danger" href="excluir.php?id='.$row['id'].'">Excluir</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Conexao::desconectar();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
		 
</body>

</html>