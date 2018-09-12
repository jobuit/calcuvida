<nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="navbar-nav mr-auto ml-auto text-center">
            <a class="nav-item nav-link active" href="{{url('/')}}"><i class="fas fa-home"></i> Inicio</a>
            <a class="nav-item nav-link active" href="{{route('calculadora')}}"><i class="fas fa-calculator"></i> Calculadora</a>
            <a class="nav-item nav-link active" href="{{ route('informacion_diabetes') }}"><i class="fas fa-question-circle"></i> Que es la diabetes?</a>
            <a class="nav-item nav-link active" href="{{ route('contacto')}}"><i class="fas fa-mobile-alt"></i> Contacto</a>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-list-ol"></i> Conteo de carbohidratos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('conteo_carbohidratos')}}">Que es el conteo de CHOS?</a>
                    <a class="dropdown-item" href="{{route('aprender_contar_carbohidratos')}}">Aprender a contar CHOS</a>

                </div>
            </li>
        </div>
        <div class="d-flex flex-row justify-content-center">
            <a href="#" class="mr-2"><i class="fab fa-instagram" style="color:white; font-size: 30px;"></i></a>
            <a href="#" class="mr-2"><i class="fab fa-facebook-square" style="color:white; font-size: 30px;"></i></a>
            <a href="#" class=""><i class="fab fa-youtube" style="color:white; font-size: 30px;"></i></a>
        </div>

    </div>
</nav>