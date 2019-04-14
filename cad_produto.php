<?php 

echo "<meta charset='UTF-8' />";
    require_once 'connect.php';
    include("verificaSessao_admin.php"); // verifica se está logado
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$cod = $_POST['cod'];
$nome = $_POST['nome'];
$qnt = $_POST['qnt']; 
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$imagem = $_FILES['imagem'];
$checarDados =  "select * from produto where cod = '$cod' or nome = '$nome'";


  if(mysqli_num_rows(mysqli_query($con, $checarDados))>0){
        echo "<script>alert('Código ou Descrição já existe'); history.back();</script>";
    


    }else{


      $sql = "INSERT INTO produto (cod, nome, qnt, preco, categoria) VALUES ('$cod', '$nome', '$qnt', '$preco','$categoria')";

          mysqli_query($con,$sql);


          $result = "SELECT * FROM produto WHERE cod = '$cod'";
          
          
          $codigo = mysqli_fetch_array(mysqli_query($con, $result));


      if (isset($_FILES['imagem'])) { // Verifica se foi selecionada alguma foto
        
        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));//pega extensão do arquivo

        $novoNome =  $codigo['cod'].$extensao;  //define o nome do arquivo de acordo com o código do produto

        //md5(time()).$extensao; -> define o nome do arquivo como o codigo do produto para que não hajam dois nomes iguais na mesma pasta, poderia ser também o nome do produto.

        $diretorio = "imagem_pro/";//define o diretorio(pasta) onde sera salvo o arquivo

        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novoNome);//move para o diretório(pasta)

        $diretorioNome = $diretorio.$novoNome;//guarda o nome do diretório junto com o nome do arquivo para guardar este endereço no campo do banco de dados




        
          

          


          $sql = "UPDATE produto SET imagem = '$diretorioNome' WHERE cod = ".$_POST['cod']."";


          mysqli_query($con, $sql) or trigger_error(mysqli_error()." ".$sql);
          echo "<script>alert('Cadastro realizado com sucesso');</script>";
          echo '<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=inserir_pro.php">';
          
        
      
      }
    }
//Gravando no banco de dados !

//conectando com o localhost - mysql

 /*if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query($query,$connect);
        
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";


$sql = mysql_query("INSERT INTO cliente (nome_cliente, cpf_cliente, sexo_cliente, nasc_cliente, email_cliente, senha_cliente, cidade, estado) VALUES ('$nome_cliente', '$cpf_cliente', '$sexo_cliente', '$nasc_cliente', '$email_cliente', '$senha_cliente', '$cidade', '$estado')");

mysql_query($con,$sql) or trigger_error(mysqli_error()."".$sql);

echo "Seu cadastro foi realizado com sucesso!";
*/

?> 
</body>
</html>