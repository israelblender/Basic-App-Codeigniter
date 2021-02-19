<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    
    <title>EllisDev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/navbars/navbar.css" rel="stylesheet">

    <!-- <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet"> -->

    <?php 
        echo '<link href="'.base_url().'assets/css/bootstrap-theme.css'.'" rel="stylesheet">';
        // echo '<link href="'.base_url().'assets/css/bootstrap.rtl.css'.'" rel="stylesheet">';
    ?>
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">EllisDev</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Empresa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <!-- <img class="d-block w-100" src="/images/banner1.jpg" alt=""> -->
        <?php
        foreach($dates as $row){
            echo '<div class="carousel-item active">'.
                '<img class="d-block w-100" src="'.base_url().'assets/img/'.$row->path.'">
            </div>';

        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <!-- <h3>Banners de Views</h3> -->
    <script>
        window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"><\/script>')
    </script>
    <!-- <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script> -->
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/docs.min.js"></script>
    
    <script src="https://getbootstrap.com/docs/4.0/assets/js/docs.min.js"></script>
    
</html>