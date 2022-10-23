<?php 
     $titulo = "Lista de Usuários";
    

     include "./layout/cabecalho.php"; 
    include "./conexao.php";
?>


<h1>Usuarios </h1>

<?php 

    $query = "SELECT * FROM usuarios";
	
	$result = mysqli_query($conn,$query);
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			$name = $row["nome"];
			echo "Name: ".$name."<br/>";
		}
	}
    $result = mysqli_query($conn,"insert into usuarios (nome,login,senha,ativo) values('fer','nan','do',true)");
    include "./layout/rodape.php"; 
    
?>