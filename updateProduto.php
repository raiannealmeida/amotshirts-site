⁠⁠⁠<?php 
echo "<meta charset='UTF-8' />";
    require_once 'connect.php';
    include("verificaSessao_admin.php");
    
    $cod = $_POST['cod'];
	$nome = $_POST['nome'];
	$qnt = $_POST['qnt']; 
	$preco = $_POST['preco'];
	$categoria = $_POST['categoria'];
	$imagem = $_FILES['imagem'];
    //$imagem = trim($_POST['imagem'])
    

      if (isset($_FILES['imagem'])) { // Verifica se foi selecionada alguma foto
        
        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));//pega extensão do arquivo

        $novoNome =  $codigo['cod'].$extensao;  //define o nome do arquivo de acordo com o código do produto

        //md5(time()).$extensao; -> define o nome do arquivo como o codigo do produto para que não hajam dois nomes iguais na mesma pasta, poderia ser também o nome do produto.

        $diretorio = "imagem_pro/";//define o diretorio(pasta) onde sera salvo o arquivo

        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novoNome);//move para o diretório(pasta)

        $diretorioNome = $diretorio.$novoNome;//guarda o nome do diretório junto com o nome do arquivo para guardar este endereço no campo do banco de dados


        
            $sql = "UPDATE produto SET nome ='$nome', qnt = '$qnt', preco = '$preco', categoria = '$categoria', imagem = '$diretorioNome' where cod = '$cod'";

            mysqli_query($con, $sql) or trigger_error(mysqli_error()." ".$sql);
            echo "<script>alert('Cadastro Atualizado com Sucesso!');</script>";
            echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=editar_pro.php">';
        
        
  




?>