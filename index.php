
<?php 
    $titulo = "Página Inicial";

    $logo = "./img/logoPHP.png";
    
    include "./layout/cabecalho.php"; 

?>

        <h1>Página Inicial</h1>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="mb-3">
                    <label class="form-label">Endereço de Email</label>
                    <input type="email" name="email" class="form-control" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Digite sua reclamação</label>
                    <textarea name="reclamacao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Bem vindo ao sistema
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Meu título do card</h5>
                        <p class="card-text">
                            Este é o card para utilização no nosso sistema
                        </p>
                        <a href="#" class="btn btn-primary">Clique aqui para saber mais</a>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>Fernando</td>
                            <td>111.111.111-11</td>
                            <td>
                                <a class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

<?php 

    include "./layout/rodape.php"; 
    
?>

