@include('welcome/head')
@include('welcome/header')
@include('welcome/nav')

<style media="screen">
    a{
        text-decoration: none;
    }
    .contenedor-menu{
        width: 100%;
        min-width: 300px;
        display: inline-block;
        background:#454545;
        
    }
    .contenedor-menu .menu{
        width: 100%;;

    }
    .contenedor-menu ul{

        list-style: none;
    }
    .contenedor-menu .menu li a{
      text-decoration: none;
      color: #ABEBC6;
        display: block;
        /* padding: 15px 20px; */
        padding:10px;
    }
    .contenedor-menu .menu li a:hover{
        background: #1a95d5;
        color: #fff;
    }
    .contenedor-menu .menu .icono{
        font-size: 12px;
        line-height: 18px;
        float: right;

    }
    .contenedor-menu .menu ul{
        display: none;
    }
    .imagen{
        margin-left:5px ;
    }
    .listado li{
      color:#fff;
    }
  

</style>


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

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-9">
                <div class="row mt-2">
                    <div class="container">
                
                        <h4 class="card-header text-white blockquote bg-primary">Metodo del plato</h4>
                        <div class="row">


                            <div class="col-md-5">
                                <div class="d-flex justify-content-start contenedor-menu border mt-1" >
                                    <ul class="menu">
                                        <li><a href="#"><strong>25% Proteinas</strong> <i class="icono fas fa-chevron-down"></i></a>
                                            <ul class="listado">
                                                <strong><li>Frijoles y lentejas</li>
                                                    <li>Nueces y semillas</li>
                                                    <li>Pescado</li>
                                                    <li>Mariscos</li>
                                                    <li>Huevos</li>
                                                    <li>Queso</li>
                                                    <li>Pollo</li>
                                                    <li>Pavo</li>
                                                    <li>Carne de res</li>
                                                    <li>Puerco</li>
                                                    <li>Humus</li>
                                                    <li>Hamburguesas y Nuggets de soya</li></strong>
                                            </ul>
                                        </li>
                                        <li><a href="#"><strong>25% Vegetales con almidon</strong> <i class="icono fas fa-chevron-down"></i></a>
                                            <ul class="listado">
                                                <strong><li>Calabaza</li>
                                                    <li>Cachote</li>
                                                    <li>Frijoles verdes</li>
                                                    <li>Maiz</li>
                                                    <li>Yuca</li>
                                                    <li>Boniato</li>
                                                    <li>Batata</li>
                                                    <li>Platano</li>
                                                    <li>Quinua</li>
                                                    <li>Arroz</li>
                                                    <li>Arroz integral</li>
                                                    <li>Tortillas</li>
                                                    <li>Papas fritas</li>
                                                    <li>Pasta</li></strong>
                                            </ul>
                                        </li>
                                        <li><a href="#"><strong>50% Vegetales sin almidon</strong> <i class="icono fas fa-chevron-down"></i></a>
                                            <ul class="listado">
                                                <strong><li>Chiles</li>
                                                    <li>Nopales</li>
                                                    <li>Jalapeños</li>
                                                    <li>Zanahorias</li>
                                                    <li>Col</li>
                                                    <li>Berenjena</li>
                                                    <li>Coliflor</li>
                                                    <li>Brocoli</li>
                                                    <li>Jimaca</li>
                                                    <li>Tomates</li>
                                                    <li>Espinaca</li>
                                                    <li>Pimentones</li></strong>
                                            </ul>
                                        </li>
                                        <li><a href="#"><strong>+Frutas</strong> <i class="icono fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li>
                                                    <img src="img/img4.jpg" alt="" width="100%" class="">

                                                </li>

                                            </ul>
                                        </li>
                                        <li><a href="#"><strong>+Bebidas</strong> <i class="icono fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li>
                                                    <img src="img/beb.jpg" alt="" width="100%" class="">
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body d-flex justify-content-end">
                                    <div class="embed-responsive embed-responsive-16by9">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/1X5nkffW52A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>


                                </div>

                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <img src="img/mt.jpg" alt="" width="90%" class="">

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <h1 class="display-5">¿Qué puede comer un diabético?</h1>
                <p class="blockquote">Una persona diabética debe tener un buen plan de alimentación. La verdad es que una persona diabética
                    puede comer de todo, excepto, aquellos alimentos que tengan un gran nivel de azúcar como los carbohidratos,
                    debido a que estos aportan energía al organismo; se establece que hay que comerlos de forma limitada.</p><br>
                <h1 class="display-5">Alimentos bajos en azúcar para diabéticos</h1>
                <p class="blockquote">Los alimentos bajos en azucares son los vegetales, las legumbres,
                    los lácteos sin grasas y algunos carbohidratos que no poseen tanto azúcar.</p>

                <img src="img/img21.jpg" class="img-fluid mb-3" alt="Responsive image" width="100%"><br>
                <h1 class="display-5">Lista de alimentos que puede comer un diabético.</h1>
                <p class="blockquote">Estos son los alimentos que puede comer una persona diabética para reducir el riesgo de complicación en
                    su vida cotidiana y evitar derrames o ataques al corazón.</p>
                <ul>
                    <li><em><strong>Vegetales:</strong> Puedes comer en todas las cantidades.</em></li>
                    <li><em><strong>Granos integrales:</strong> Son una gran fuente de nutrientes.</em></li>
                    <li><em><strong>Fruta:</strong> No más de tres unidades al día o porciones requeridas por su cuerpo.</em></li>
                    <li><em><strong>Productos lácteos sin grasa:</strong> Quesos, leche desnatada y yogurt.</em></li>
                    <li><em><strong>Menestras:</strong> Sus nutrientes son ricos y recomendados por los especialistas.</em></li>
                    <li><em><strong>Carnes magras:</strong> Buenas para el organismo y la salud de diabéticos.</em></li>
                    <li><em><strong>Aves de corral:</strong> Son una fuente de nutrientes bastante positiva para el cuerpo.</em></li>
                    <li><em><strong>Pescado:</strong> Es una de las mejores carnes.</em></li>
                </ul>
                <div class="row">
                    <div class="col-md-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Fesxyh_GkWw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/fYKQVXv_4Y0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/asEEP2CzlYs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-2">
                    <img class="card-img-top" src="img/img9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3>¿Que frutas puede comer un deabetico</h3>
                        <p class="">Entre las frutas que puede comer un diabetico con tal que no consuma mucha azucar en su cuerpo depediendo del nivel que tengas en la azucar
                            pues estas frutas son Albericoque,Mandarina,toronja o pomelo,guayaba,kiwi,limo,ciruela,etc...</p>
                    </div>
                </div>
                <div class="card mb-2">
                    <img class="card-img-top" src="img/img10.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3>¿Cómo se puede tratar la diabetes?</h3>
                        <P>Por un lado es importante controlar lo valores de azúcar en sangre. Esto se logra principalmente con dieta, actividad física y medicamentos (ya sea con pastillas o bien con inyección de insulina).
                            Al mismo tiempo, y por el alto riesgo de tener problemas cardiovasculares, hay que controlar en forma intensa el resto de los factores de riesgo presentes, ya sea la presiones elevada, el colesterol, el peso y el tabaquismo.</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="img/Impulsos.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3>Investigan cómo tratar la diabetes a través de impulsos eléctricos en el cerebro</h3>
                        <p>La dopamina es un neurotransmisor que actúa sobre diferentes áreas del cerebro e influye en actividades como el placer, el aprendizaje, la motivación y los mecanismos de recompensa del cerebro. Las anomalías en la liberación de dopamina están asociadas a enfermedades relacionadas con el cerebro en las que se está implementando la estimulación cerebral como tratamiento.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>








    <!--videos-->


</div><br>



<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.menu li:has(ul)').click(function(e){
            e.preventDefault();
            if($(this).hasClass('activado')){
                $(this).removeClass('activado');
                $(this).children('ul').slideUp();
            }else{
                $('.menu li ul').slideUp();
                $('.menu li').removeClass('activado');
                $(this).addClass('activado');
                $(this).children('ul').slideDown();
            }
        })
    });
</script>

@include('welcome/footer')
