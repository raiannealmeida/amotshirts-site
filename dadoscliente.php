⁠⁠⁠<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Início | AmO T-Shirts</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <?php include("verificaSessao.php"); 
    require_once'connect.php';
    $email_cliente = $_SESSION['email_cliente'];
    $sql = "SELECT * FROM cliente where email_cliente = '$email_cliente'";
    $clientes= mysqli_query ( $con, $sql);
    $cliente = mysqli_fetch_array($clientes);
    ?>
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +55 74 9 9110-7434</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> amotshirts@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/amoteeshirts/?ref=aymt_homepage_panel" target=_black><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/amoteeshirts/" target=_black> <i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index_cli.php"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group"> <!-- Botão CARRINHO E ENTRAR no topo da tela-->                     
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a><b>Olá, <?php echo $_SESSION['nome_cliente'] ?>!</b></a></li>
                                <li><a href="cadastro.php"><i class="fa fa-user"></i> Meus Dados</a></li>
                                <li><a href="sair.php"><i class="fa fa-lock"></i> Sair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index_cli.php" class="active">INÍCIO</a></li>
                                <li class="dropdown"><a href="#">NOSSAS TEE´S<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="tshirts_cli.php">T-Shirts</a></li> 
                                        <li><a href="regatas_cli.php">Regatas</a></li>  
                                        <li><a href="manga-longa_cli.php">Manga Longa</a></li> 
                                    </ul>
                                </li> 
                                <li><a href="dress_cli.php">DRESS-SHIRT</a></li>
                                <li><a href="conjuntos_cli.php">CONJUNTOS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Pesquisar"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

<div id="contact-page" class="container">
        <div class="bg">
            <div class="row">           
                <div class="col-sm-12">                         
                    <h2 class="title text-center"><strong>Meus Dados</strong></h2>
       
                    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="signup-form"><!--novo form-->
                        <h2>Editar Dados</h2>
                        <form action="updateCliente.php" method="post">
                            <input type="text" name="nome_cliente" placeholder="Nome Completo"/>
                            <?php echo "<input readonly=\"\" type=\"text\" name=\"cpf\" value=\" ".$aluno['cpf']."\"; >"?>
                            <input type="text" name= "nasc_cliente" placeholder="Data de Nascimento (XXXX-XX-XX)"/>
                            <input type="text" name= "sexo_cliente" placeholder="Sexo"/>
                            <input type="email" name= "email_cliente" placeholder="Email"/>
                            <input type="password" name="senha_cliente" placeholder="Senha"/>
                            <input type="text" name= "cidade" placeholder="Cidade"/>
                            <input type="text" name= "estado" placeholder="Estado"/>
                            <button type="submit" class="btn btn-default">CONFIRMAR </button>
                            
                       
                        </form>
                    </div><!--/novo form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">>></h2>
                </div>
             
             <div class="col-sm-4">
                    <div class="signup-form"><!--novo form-->
                        <h2>Seus Dados já cadastrados</h2>
                        <tbody>
              
              <?php 

              
              foreach ($clientes as $cliente){ ?>
                <table>
    
             <h4>
              <tr>
              <th><b>NOME COMPLETO:</b></th>
                <td><?php echo $cliente['nome_cliente'] ?></td>
              </tr>
              <tr>
                <th><b>CPF:</b></th>
                <td><?php echo $cliente['cpf_cliente'] ?></td>
              </tr>
            <tr>
                <th><b>SEXO:</b></th>
                <td><?php echo $cliente['sexo_cliente'] ?></td>
            </tr> 
            <tr>
                <th><b>DATA DE NASCIMENTO:</b></th>
                <td><?php echo $cliente['nasc_cliente']?></td>
            </tr>
            <tr>
                <th><b>EMAIL:</b></th>
                <td><?php echo $cliente['email_cliente']?></td>
            </tr>
            <tr>
                <th><b>SENHA:</b></th>
                <td><?php echo $cliente['senha_cliente']?></td>
            </tr> 
            <tr>
                <th><b>CIDADE:</b></th>
                <td><?php echo $cliente['cidade']?></td>
            </tr> 
            <tr>
                <th><b>ESTADO:</b></th>
                <td><?php echo $cliente['estado']?></td>
            </tr> </br>
</h4>
              
              <?php  } ?>
            </tbody>
          </table>
          </div>

          <!--FINALIZA CONSULTA DE DADOS-->
    
          <tr>
          </div>
        </div>
    </section><!--/form-->

        <td>
                    </strong></h2>                                                       
                   
                </div>                  
            </div>
            </div>
            </div>

    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>Enviamos para todo o Brasil</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Saiba mais</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="sobre_nos_cli.php">Sobre a Empresa</a></li>
                                <li><a href="perguntas_cli.php">Perguntas Frequentes</a></li>
                                <li><a href="contatos_cli.php">Contatos</a></li>
                            </ul>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Rua Dormentes, nº 13B, Gercino Coelho</p>
                    <p class="pull-right">Petrolina-PE </p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>