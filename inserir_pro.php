<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inserir | AmO T-Shirts</title>
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

     <?php include("verificaSessao_admin.php");
        include("admin_login.php");

    require_once 'connect.php';
     $sql = "SELECT * FROM produto";
     $lista_pro = mysqli_query ( $con, $sql);

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
                            <a href="inicio_admin.php"><img src="images/home/logo.png" alt="" /></a>
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
                                <li><a><b>Olá, Administradora <?php echo $_SESSION['login'] ?>!</b></a></li>
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
                                <li><a href="inicio_admin.php" class="active">INÍCIO</a></li>
                                <li class="dropdown"><a href="#">PRODUTO<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="lista_pro.php">Lista de Produtos</a></li>
                                        <li><a href="inserir_pro.php">Inserir Produto</a></li> 
                                        
                                    </ul>
                                </li> 
                                <li><a href="clientes.php">CLIENTES</a></li>
                                
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
                    <h2 class="title text-center"><strong>Inserir Produtos</strong></h2>
     
        <section id="form"><!--form-->
        <div class="container">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="signup-form"><!--novo form-->
                        <h2><Center><b>PREENCHA OS DADOS</b></h2>
                        <form action="cad_produto.php" method="post" enctype="multipart/form-data">
                            <input type="text" name="cod" placeholder="Código do Produto"/>
                            <input type="text" name="nome" placeholder="Descrição"/>
                            <input type="int" name= "qnt" placeholder="Quantidade"/>
                            <input type="double" name= "preco" placeholder="Preço"/>
                            <select type="category" name="categoria" placeholder="Categoria">
                            
                                    <option>T-shirt</option>
                                    <option>Regata</option>
                                    <option>Manga Longa</option>
                                    <option>Dress</option>
                                    <option>Conjuntos</option>
                            </select>

                            </li>
                            </div></br>
                            <input type="file" name= "imagem"/>

                            </br>
                            
                            <button type="submit" class="btn btn-default">Cadastrar Produto</button>
                        </form></Center>
                    </div><!--/novo form-->
                
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-4">
                <div class="signup-form">
                <img src="anuncio/coraçao.jpg" class="girl img-responsive" alt="" />
                </div>
            </div>
       </div>
    </section><!--/form-->

                    </strong></h2>                                                       
                   
                </div>                  
            </div>
            </div>
            </div>

    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Rua Dormentes, nº 13B, Gercino Coelho</p>
                    <p class="pull-right">Petrolina-PE </p>
                </div>
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