@include('welcome/head')
@include('welcome/header')
@include('welcome/nav')


<body data-spy="scroll" data-target="#menu" background-image="img/img8.jpg">
<div class="mt-2">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img class="d-block w-100" src="img/img1.jpg" alt="First slide">
            </div>
            <div class="carousel-item" >
                <img class="d-block w-100" src="img/4.jpg" alt="Second slide">
            </div>
            <div class="carousel-item" >
                <img class="d-block w-100" src="img/img3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid mt-3 mb-4">
        <div class="card-deck">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HV9h-qlBqsE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <!-- <img class="card-img-top" src="public/img/descarga.svg" alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title">La Diabetes Tipo 1</h5>
                    <p class="card-text">Enfermedad que afecta el pancreas tras no producir insulina natural, para controlar el nivel
                        de azucar en la sangre.</p>
                    <a href="{{url('/')}}index.php/informacion_diabetes/Content" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Ver mas...</a>
                </div>
            </div>
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/GRQPxiTqrmQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>            </div>
                <!-- <img class="card-img-top" src="public/img/descarga.svg" alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title">La Diabetes Gestacional</h5>
                    <p class="card-text">Se presenta durante el embarazo a partir del segundo trimestre de embarazo, se puede controlar con dieta
                        y ejercicios.</p>
                    <a href="{{url('/')}}index.php/informacion_diabetes/Content" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Ver mas...</a>

                </div>
            </div>
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/1vkjV6-qOfE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>            </div>
                <!-- <img class="card-img-top" src="public/img/descarga.svg" alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title">Sintomas de la Diabetes</h5>
                    <p class="card-text">Algunos sintomas que se muestran son: Exceso de orina, perdida de peso, hambre frecuente,
                        visión borrosa.</p>
                    <a href="{{url('/')}}index.php/informacion_diabetes/Content" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Ver mas...</a>
                </div>
            </div>
        </div>
    </div>

</div><br>

@include('welcome/footer')
