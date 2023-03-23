<html>
<head>
    <title>Main</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #FFFAD7">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/mainn.css') }}">
    <div class="sidenav">
      <div class="synab">
        <b>SYNab</b>
      </div>
      <hr>
      <br>
      <b><a>{{ Auth::user()->name }}</a></b>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <br><button type="submit" class="btn btn-danger">Logout</button>
      </form>
      <ul class="nav flex-column"><hr>
        <li class="nav-item"><a class="nav-link" href="{{ route('grupos') }}">Grupos</a></li><hr>
        <li class="nav-item"><a class="nav-link" href="{{ route('reportes') }}">Reportes en proceso</a></li><hr>
      </ul>
    </div>
    <div class="canvas">
      @yield('contenido')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
