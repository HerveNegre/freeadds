
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container ">
  <header class="blog-header">
    <div class="col-12 fluide">
    <br>
    </div>
  <br>
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-1 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 align-items-center">
        <a class="blog-header-logo text-dark" href="#">
      
        <img src="/images/logo_kiki.png" class="img-fluid" alt="Logo image">
       
      
      </a>
      </div>
      
      <?php if(isset($_SESSION['username'])) : ?>
        <li class="nav-item dropdown light no-arrow">
          
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/images/login.png"  width=50><br>
           <?php  echo $_SESSION['username']  ?> 
            <i class="fas fa-user-circle fa-fw"></i>
            
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

          <a><img src="images/cart_button.png" WIDTH="20"></a>
  
          <a class="nav-link text-dark" href="exit.php" >LOGOUT</a>
           
          </div>
        </li>
        <?php else : ?> 
          <a><button class="btn btn-link btn-sm text-dark order-1 order-sm-0 " id="sidebarToggle" href="login.php"><img src="/images/login_none.png"  width=50><br>LOGIN
        </button></a>
            <?php endif;?>
    </div>
    <div class="container-fluid">
        <br>
        
        <br>
      </div>
      <div class="container-fluid">
        <br>
        <br>
      </div>
      <div class="container-fluid">
         
        <br>
       
        @include('partials.search')
      </div>
      <div class="container-fluid">
        <br>
        <br>
      </div>
      <div class="container-fluid">
        <br>
        <br>
      </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between align-items-center">
      <a class="p-2 text-center" href="#"><img src="/images/immobilier.png" height="70"><br>Immobilier </a>
      <a class="p-2 text-center" href="#"><img src="/images/voiture.png" height="70"><br>Véhicules </a>
      <a class="p-2 text-center" href="#"><img src="/images/vacance.png" height="70" ><br>Vacances</a>
      <a class="p-2 text-center" href="#"><img src="/images/job.png" height="70" ><br>Emploi</a>
      <a class="p-2 text-center" href="#"><img src="/images/loisir.png" height="70" ><br>Loisirs</a>
      <a class="p-2 text-center" href="#"><img src="/images/multimedia.png" height="70" ><br>Multimédia</a>
      <a class="p-2 text-center" href="#"><img src="/images/maison.png" height="70" ><br>Maison</a>
      <a class="p-2 text-center" href="#"><img src="/images/animal.png" height="70" ><br>Animaux</a>
      <a class="p-2 text-center" href="#"><img src="/images/mode.png" height="70" ><br>Mode</a>
      <a class="p-2 text-center" href="#"><img src="/images/diver.png" height="70" ><br>Divers</a>
     
    </nav>
  </div>
  <div class="container-fluid">
        <br>
        <br>
      </div>

  <!-- <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div> -->
  <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Immobilier</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Véhicules</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Vacance</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Emploi</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Loisirs</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Multimédia</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Maison</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Animaux</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Mode</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Divers</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
  </div>
</div>

<main role="main" class="container">
  
     

</main><!-- /.container -->

<footer class="blog-footer justify-content-between align-items-center">
  <p>Les Power Ronger copyright</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
</body>
</html>
