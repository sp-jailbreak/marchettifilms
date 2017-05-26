<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="{{asset('css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Loading Flat UI -->
    <link href="{{asset('css/flat-ui.css')}}" rel="stylesheet">
      <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


      <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>





<div class="container">

  <div class="row demo-row">
    <div class="col-xs-12">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse navbar-embossed" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <!-- <a class="navbar-brand" href="home">Marchetti films</a> -->
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-01">
          <ul class="nav navbar-nav navbar">
            <li><a href="home">Home</a></li>
            <li><a href="services">Serviços</a></li>
            <li><a href="team">Equipe</a></li>
            <li><a href="social">Social</a></li>
              <li><a href="dna">DNA</a></li>
           </ul>

        </div><!-- /.navbar-collapse -->
      </nav><!-- /navbar -->
    </div>
  </div> <!-- /row -->
  </div>

  <br>

  <div class="container">

      @yield('content')
  </div>

<div class="container mf-form-solicite">

  <form>
    <div class="form-group col-md-3">
      <label for="inputName">Nome</label>
      <input type="name" class="form-control" placeholder="Seu Nome">
    </div>

    <div class="form-group col-md-3">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" placeholder="contato@marchettifilms.com">

    </div>



    <div class="form-group col-md-3">
      <label for="inputPhone">Telefone</label>
      <input type="telephone" class="form-control"  placeholder="(11) 9 5332-5714">
    </div>



    <label for="submit">Nós entramos em contato com você</label>
    <button type="submit" class="btn btn-primary col-md-3">Enviar</button>
  </form>



</div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <h3 class="footer-title">Bio</h3>
          <h4 class="footer-title">Agência de Marketing especializada em pequenas empresas.

          </h4>
          <div class="fb-page"
            data-href="https://www.facebook.com/MarchettiFilms/"
            data-width="380"
            data-hide-cover="false"
            data-show-facepile="true"
            data-show-posts="false">
        </div>

          <p class="pvl">
            </p>

          <a class="footer-brand" href="" target="_blank">
            <img src="" alt="" />
          </a>
        </div> <!-- /col-xs-7 -->

        <div class="col-xs-12 col-md-5">
          <div class="footer-banner">
            <h3 class="footer-title">Marchetti Films</h3>
            <ul>
              <li>contato@marchettifilms.com</li>
              <li>(11)9 5332-5714 (Tim) Whatsapp </li>
              <li>(11)9 9411-2316 (Vivo)</li>
              <li><a href="https://www.facebook.com/MarchettiFilms/" target="_blank"> facebook.com/MarchettiFilms</a> </li>
              <li><a href="https://www.instagram.com/marchettifilms/" target="_blank"> instagram.com/marchettifilms</a> </li>
              <li><a href="https://twitter.com/marchetti_films" target="_blank"> twitter.com/marchetti_films</a> </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    <div class="card card-inverse card-primary mb-3 text-center">
      <div class="card-block">
        <blockquote class="card-blockquote">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
      </div>
    </div>

  </footer>

  <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
  <script src="{{asset('js/vendor/jquery.min.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('js/vendor/video.js')}}"></script>
  <script src="{{asset('js/flat-ui.min.js')}}"></script>

  </body>
  </html>
