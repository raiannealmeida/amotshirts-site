<?php

  include_once 'connect.php';


 $regata = mysqli_query($con, "SELECT * FROM produto WHERE categoria='regata'");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Regata</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<link href="css/bootstrap.min.css" rel="stylesheet">
   	<link href="css/custom.css" rel="stylesheet">
    

    <style type="text/css" media="screen">
        #border {
            border: 1px solid #000;
        }    
    </style>

</head>


  <div class="container-fluid">
	<div class="row">
        <div role="tabpanel">
            <div class="col-sm-3">
                
            </div>
            <div class="col-sm-9">
                <div class="tab-content tab-content-produtos">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                         <div class="row">
                               <?php foreach ($regata as $blusa) { ?>     
                               <?php $imagem_pro = $blusa['imagem']; ?> //Aqui é aonde está puxando a imagem.           
                                <div id="" class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <?php echo "<img class='img-responsive' src='imagem_pro/$imagem_pro'>"; ?>
                                    <div class="caption text-center">
                                       <h4 id="h4-produto"><?php echo $blusa['nome']; ?></h4>

                                        <?php if ($blusa['qnt'] == 0) {
                                          echo "<button class='btn btn-block btn-primary'>INDISPONÍVEL</button>";
                                       }else {
                                        echo "<button class='btn btn-block btn-info'>DISPONÍVEL</button>";
                                        }  ?> 
                                    </div>
                                    </div>
                                    </div>
                                <?php } ?>
                            </div>
                    </div>
            
                </div>
            </div>
        </div>
	</div>
</div>


 <!-- Arquivos JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>
