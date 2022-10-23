<?php 
     $titulo = "Consultar CEP";
     $logo = "./img/logoPHP.png";
    include "./layout/cabecalho.php";
       
   
    if( isset( $_GET["Cep"] ) &&  !empty($_GET["Cep"]) )
    {
        $dados = file_get_contents("https://viacep.com.br/ws/".$_GET["Cep"]."/json/");
        $dados = json_decode($dados,true);
       //print_r($dados);
    }
    else
    {

    }

    
?>

<h1>Consultar CEP</h1>
<div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="mb-3">
                   <form action="./cep.php" method="get" >

                        <label>Digite seu cep</label>
                        <input class="form-control" name="Cep"/>
                        <button class="btn btn-success mt-3" type="submit">
                            Pesquisar CEP 
                        </button>
                    </form>
                    <?php 
                        if( isset($dados)  ) 
                        {
                            if( isset($dados["erro"]) && $dados["erro"] == true)
                            {
                                ?>
                                    <div class="alert alert-danger">
                                        Esse Cep não é válido
                                    </div>
                                <?php
                            }
                            else
                            {

                            
                        ?>
                            <label>Cep Pesquisado</label>
                            <input class="form-control" readonly value="<?php echo $dados["cep"];?>" />
                            <label>Logradouro</label>
                            <input class="form-control" readonly value="<?php echo $dados["logradouro"];?>" />
                            <label>Cidade</label>
                            <input class="form-control" readonly value="<?php echo $dados["localidade"];?>" />
                        <?php 
                             }
                        }
                        ?>

                </div>
            </div>
</div>


<?php 
    include "./layout/rodape.php"; 
?>