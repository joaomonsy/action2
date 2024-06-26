<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    @vite("resources/css/style.css")
    @vite("resources/css/app.css")
    @vite("resources/css/bootstrap.css")
    @vite("resources/js/app.js")
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>Site Joia </title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">SOCCER KKKK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="{{route('site.principal')}}">Principal <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{route('site.somos')}}">Quem Somos</a>
            <a class="nav-item nav-link btn btn-primary text-white tombol" href="{{route('site.contato')}}">Contato</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Frase <span>genérica</span> <br>que eu <span>não sei </span>o que escrever</h1>
      </div>
    </div>
    <!-- akhir Jumbotron -->


    <!-- container -->
    <div class="container">

      <!-- info panel -->
    
      <!-- akhir info panel -->


      <!-- Workingspace -->
      <div class="row workingspace">
        <div class="col-lg-6">
          <img src="{{asset('img/workingspace.jpg')}}" alt="Working Space" class="img-fluid">
        </div>
        <div class="col-lg-5">
          <h2><span></span><span><br>Sydney Football Stadium</span></h2>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel scelerisque dui. Donec dignissim odio eu hendrerit tincidunt. Fusce feugiat magna purus, quis vestibulum mauris volutpat vel."</p>
          <a href="#" class="btn btn-danger tombol">Gallery</a>
        </div>
      </div>
      <!-- akhir Workingspace -->


      <!-- Testimonial -->
      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p>"DAROSEUMELHORDENTRODECAMPO"</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
            <img src="{{asset('img/messi.jpg')}}" alt="Testimonial 1">
            <img src="{{asset('img/rony.jpg')}}" alt="Testimonial 2" class="img-main">
            <img src="{{asset('img/rodilindo.png')}}" alt="Testimonial 3">
          </div>
        </div>
        <div class="row justify-content-center info-text">
          <div class="col-lg text-center">
            <h5>Rústico</h5>
            <p>Rony</p>
          </div>
        </div>
      </section>
      <!-- akhir Testimonial -->


    </div>
    <!-- akhir container -->




    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>