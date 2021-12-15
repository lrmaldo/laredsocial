
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Servicio de internet">
  <meta name="author" content="Ing. Leonardo R. Maldonado López">

  <title>La red social</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">La Red Social</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('nosotros')}}">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('planes')}}">Planes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{url('contacto')}}">Contacto</a>
          </li>
          @if (Route::has('login'))
          
          @auth
          <li class="nav-item">
          <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
        </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                    @endif
                @endauth
           
            @endif

        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Planes
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Inicio</a>
      </li>
      <li class="breadcrumb-item active">Planes</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      @foreach ($planes as $item)
      <!-- Blog Post -->

      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header">{{$item->nombre}}</h3>
          <div class="card-body">
            <div class="display-4">${{number_format($item->precio)}}</div>
            <div class="font-italic">{{-- per month --}}</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item text-truncate"> {{$item->descripcion}}</li>
            
            <li class="list-group-item">
              <a href="#" class="btn btn-primary">Ver más</a>
            </li>
          </ul>
        </div>
      </div>
          
      @endforeach
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          {{$planes->links()}}
        </ul>
      </nav>
      
      {{-- <div class="col-lg-4 mb-4">
        <div class="card card-outline-primary h-100">
          <h3 class="card-header bg-primary text-white">Plus</h3>
          <div class="card-body">
            <div class="display-4">$39.99</div>
            <div class="font-italic">per month</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
            <li class="list-group-item">
              <a href="#" class="btn btn-primary">Sign Up!</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header">Ultra</h3>
          <div class="card-body">
            <div class="display-4">$159.99</div>
            <div class="font-italic">per month</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
            <li class="list-group-item">
              <a href="#" class="btn btn-primary">Sign Up!</a>
            </li>
          </ul>
        </div>
      </div> --}}
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>