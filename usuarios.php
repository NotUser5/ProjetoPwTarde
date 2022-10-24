<?php
$titulo = "Novo Usuário";
include "./cabecalho.php";

include "./conexao.php";
$query = "Select id, nome, login, ativo from usuarios";
$resultado = mysqli_query($conexao, $query);
?>

<div class="card mt-4 mb-4 text-bg-dark">
    <div class="card-header bg-primary text-white">Usuários</div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <a href="./usuariosCreate.php" class="btn btn-success">Novo Usuário</a>
            </div>
            <div class="col-2">
                <select name="opcao" class="form-control">
                    <option selected="selected" value="0">Todos</option>
                    <option value="1">Por Nome</option>
                    <option value="2">Por Código</option>
                </select>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="textoPesquisado" />
            </div>
            <div class="col-2">
                <button class="btn btn-primary">Pesquisar</button>
            </div>
        </div>
    </div>
</div>

<table class="table table-dark table-hover table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Ativo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($resultado)) {
        ?>
            <tr>
                <td><?php echo $linha["id"]; ?></td>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["login"]; ?></td>
                <td>
                    <?php 
                    if ($linha["ativo"] == 1) {
                        ?>
                        <input type="checkbox" checked disabled>
                        <?php
                    } else {
                        ?>
                        <input type="checkbox" readonly>
                        <?php
                    }
                ?>
                </td>
                <td>
                    <a href="./usuariosEdit.php" class="btn btn-warning">Editar</a>
                    <a href="./usuariosDelete.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>