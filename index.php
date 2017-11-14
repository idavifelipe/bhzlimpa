<?php require('includes/config.php'); ?>    
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BHZ Limpa</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    
    <style>
        body { 
  background: url(img/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">BHZ LIMPA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="quem-somos.php">Quem Somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contato.php">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4" style="color: white;">BH mais limpa
            <small>, qualidade de vida para todos</small>
          </h1>
          
           <!-- <img src="img/cidade-limpa.jpg" class="img-responsive" style="width: 100%; margin-bottom: 20px;" alt="Cidade + Limpa">--> 

          <!-- Blog Post -->        
            <?php
                try {

                        $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                        while($row = $stmt->fetch()){

                                echo '<div class="card mb-4">';
                                    echo '<div style="margin:-20px;" class="card-body">';
                                    
                                        echo '<h2 class="card-title"><strong><a style="margin-left:15px;" href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></strong></h2>';
                                        echo '<div style="padding-left:15px; padding-right: 15px;"><p class="card-text">'.$row['postDesc'].'</p></div>';	 
                                        echo '<p style="float:right; margin-right: 15px;"><a href="viewpost.php?id='.$row['postID'].'">Leia Mais &rarr;</a></p>';
                                        
                                        echo '<div style="margin-top: 50px;" class="card-footer text-muted">';
                                            echo '<p>Postado em '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                                        echo '</div>';
                                        
                                    echo '</div>';
                                echo '</div>';

                        }

                        } catch(PDOException $e) {
                            echo $e->getMessage();
                        }
            ?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            
          <!-- Side Widget -->
          <div class="card my-4">
            <div class="card-body">
                <img src="img/cada-cor.jpg" class="img-responsive" style="width: 310px; height: 330px; margin-bottom: 20px;" alt="Mundo Agradece">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading list-group-item-info">
                        <h4 class="panel-title">
                          <center><a data-toggle="collapse" style="color: white;" data-parent="#accordion" href="#collapse1">
                          LEV Azul</a></center>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">Papel: jornais, revistas, caixas de papel&atilde;o, embalagens longa vida, folhas de papel, formul&aacute;rio cont&iacute;nuo, envelopes, cadernos, livros;</div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading list-group-item-warning">
                        <h4 class="panel-title">
                          <center><a data-toggle="collapse" style="color: white;" data-parent="#accordion" href="#collapse2">
                          LEV Amarelo</a></center>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Metal: latas de alum&iacute;nio (refrigerantes, cervejas), latas de metal ferroso (&oacute;leo, sardinha, tomate, achocolatados), clipes, grampos de papel e de cabelo, papel alum&iacute;nio, arames;
OBS: Pressione as tampas das latas para dentro antes de coloc&aacute;-las na sacola dos recicl&aacute;veis, para diminuir o risco de acidentes.</div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading list-group-item-danger">
                        <h4 class="panel-title">
                          <center><a data-toggle="collapse" style="color: white;" data-parent="#accordion" href="#collapse3">
                          LEV Vermelho</a></center>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Pl&aacute;stico: sacolas, garrafas pet, embalagens de shampoo, embalagens de material de limpeza e de alimentos, copos descart&aacute;veis, canos;</div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading list-group-item-success">
                        <h4 class="panel-title">
                          <center><a data-toggle="collapse" style="color: white;" data-parent="#accordion" href="#collapse4">
                          LEV Verde</a></center>
                        </h4>
                      </div>
                      <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">Vidro: garrafas de cerveja ou refrigerante, frascos de perfume ou medicamentos (vazios e limpos), potes, copos, vidros lisos e planos.
OBS: O vidro deve ser embalado em material resistente, como papel&atilde;o ou embalagem longa vida, para n&atilde;o ficar exposto e diminuir o risco de acidentes.</div>
                      </div>
                    </div>
                  </div>
                
                <a href="http://portalpbh.pbh.gov.br/pbh/ecp/comunidade.do?evento=portlet&pIdPlc=ecpTaxonomiaMenuPortal&app=slu&tax=34989&lang=pt_BR&pg=5600&taxp=0&" class="btn btn-success btn-block" style="margin-top: 20px;" target="_blank"><strong>Saiba Mais no PORTALBH</strong></a>
                
            </div>
          </div>
          
          <!-- Side Widget -->
          <div class="card my-4">
            <div class="card-body">
                <img src="img/mundo-agradece.jpg" class="img-responsive" style="width: 310px; height: 275px; margin-bottom: 20px;" alt="Mundo Agradece">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <p style="text-align: justify;"><strong>A coleta seletiva traz in&uacute;meros benef&iacute;cios sociais e ambientais para a cidade, tais como:</strong></p>
                <ul class="fa-ul" style="text-align: justify;">
                    <li><i class="fa-li fa fa-check-square"></i> diminui&ccedil;&atilde;o da explora&ccedil;&atilde;o de recursos naturais renov&aacute;veis e n&atilde;o-renov&aacute;veis;</li>
                    <li><i class="fa-li fa fa-check-square"></i>melhoria da limpeza da cidade e da qualidade de vida da popula&ccedil;&atilde;o;</li>
                    <li><i class="fa-li fa fa-check-square"></i>aumento da vida &uacute;til dos aterros sanit&aacute;rios;</li>
                </ul>
          <a href="http://portalpbh.pbh.gov.br/pbh/ecp/comunidade.do?evento=portlet&pIdPlc=ecpTaxonomiaMenuPortal&app=slu&tax=34989&lang=pt_BR&pg=5600&taxp=0&" class="btn btn-success btn-block"  target="_blank"><strong>Saiba Mais no PORTALBH</strong></a>
            </div>
          </div>
          
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; BHZ Limpa 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>