<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Responsivo usando bootstrap</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script> 
    <link rel="stylesheet" href="{{asset('css/ejemplo26.css')}}">
</head>
<body>
    <!--Menu de Navegacion-->
    <nav class="navbar fixed-top navbar-dark bg-dark navbar-expand-sm" id="topNav">
        <button type="button" class="navbar-toggler"  data-toggle="callapse" data-target="#navbar"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
    </button>
    <a href="#" class="navbar-brand">Logo</a>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Acerca de </a></li>
            <li class="nav-item"><a href="#" class="nav-link">Productos</a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle"
                    id="ListaServicios" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" >Servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="ListaServicios">
                    <a href="#" class="dropdown-item">HTML</a>
                    <a href="#" class="dropdown-item">CSS</a>
                    <a href="#" class="dropdown-item">Javascript</a>
                </div>
            </li>
        </ul>
        <!--Buscador-->
        <form action="" class="form-inline" role="search">
            <input type="text" name="txtbuscar" id="txtbuscar" class="form-control" placeholder="buscar">
            <button type="submit" class="btn btn-secondary">Buscar</button>
        </form>
    </div>
    </nav>
    <!--Contenedor Principal-->
    <div class="container-fluid">
        <div class="row">
            <!--columna Izquierda-->
            <div class="col-sm-3">
                <!--Menú principal-->
                <div class="card">
                    <div class="card-header pb-0"><br><br><br>
                        <h5 class="card-title">
                            <i class="fa fa-random" aria-hidden="true"></i>
                            Menú Principal
                        </h5>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            HTML
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            CSS
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Javascript
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Jquery
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Bootstrap
                        </a>
                    </div>
                </div>
                <!--Panel de configuración-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title"><i class="fa"></i></h5>
                    </div>
                </div>
                <!--Recursos-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title"><i class="fa"></i></h5>
                    </div>
                </div>
            </div>
            <!--columna Central-->
            <div class="col-sm-6"></div>
            <!--columna Derecha-->
            <div class="col-sm-3"></div>
        </div>
    </div>
    <!--Pie de Pagina ( Footer )-->
</body>
</html>