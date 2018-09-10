@include('welcome/head')
@include('welcome/nav')

<div class="container-fluid">
    <h1 class="mt-5">¿Que es el conteo de carbohidratos?</h1>
    <p class="blockquote">Conteo de carbohidratos es importante para un buen control de la diabetes.
        Le ayuda a entender qué alimentos afectan su nivel de glucosa (azúcar) para que pueda
        suministrarse la cantidad correcta de insulina con los alimentos que toma. Contar
        carbohidratos puede ser muy fácil de aprender. Cuando usted entienda como se hace,
        tendrá la libertad al elegir
        alimentos y al mismo tiempo mantener sus niveles de glucosa bajo buen control.</p>
</div>

<h2 class="text-center">Donde encontramos los Carbohidratos?</h2>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="cereales">Cereales</button></li>
            <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="frutas">Frutas</button></li>
            <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="verduras">Verduras</button></li>
            <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="lacteos">lacteos</button></li>
            <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="leguminosas">Leguminosas</button></li>
            <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="tuberculos">Tuberculos</button></li>
            <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="alimentos_procesados">Alimentos procesados</button></li>
        </ul>
    </div>
</nav>

<div class="container-fluid d-flex justify-content-center">
    <div class='row' id="theDiv"></div>
</div>

@include('welcome/footer')

<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {

        Cereales();

        $("button").on("click", function (e) {

            $( "#theDiv" ).empty();

            id = $(this).attr('id');
            console.log(id);

            if(id=="cereales"){
                Cereales();
            }else if(id=="frutas"){
                Frutas();
            }else if(id=="verduras"){
                Verduras();
            }else if(id=="lacteos"){
                Lacteos();
            }else if(id=="leguminosas"){
                Leguminosas();
            }else if(id=="tuberculos"){
                Tuberculos();
            }else if(id=="alimentos_procesados"){
                AlimentosProcesados();
            }
        });

        function Cereales(){
            $('#theDiv').append("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/Cereales/img5.jpg' alt='Card image cap'><div><p class='card-text'>Salvado de trigo.</p></div></div></div>");
            $('#theDiv').append("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/Cereales/img2.jpg' alt='Card image cap'><div><p class='card-text'>Quinoa.</p></div></div></div>");
            $('#theDiv').append("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/Cereales/img3.jpg' alt='Card image cap'><div><p class='card-text'>Avena.</p></div></div></div>");
            $('#theDiv').append("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/Cereales/img4.jpg' alt='Card image cap'><div><p class='card-text'>Amaranto.</p></div></div></div>");
            $('#theDiv').append("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/Cereales/trigo.jpg' alt='Card image cap'><div><p class='card-text'>Trigo.</p></div></div></div>");
            $('#theDiv').append("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/Cereales/Arroz.jpg' alt='Card image cap'><div><p class='card-text'>Arroz.</p></div></div></div>");
            $('#theDiv').append("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/Cereales/sorgo.jpg' alt='Card image cap'><div><p class='card-text'>Sorgo.</p></div></div></div>");
            $('#theDiv').append("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/Cereales/Cebada.jpg' alt='Card image cap'><div><p class='card-text'>Cebada.</p></div></div></div>");

        }

        function Frutas(){
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/frutas/durazno.jpg' alt='Card image cap'><div><p class='card-text'>Durazno.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/frutas/fresa.jpg' alt='Card image cap'><div><p class='card-text'>Fresas.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/frutas/naranja.jpg' alt='Card image cap'><div><p class='card-text'>Naranja.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/frutas/pitaya.jpg' alt='Card image cap'><div><p class='card-text'>Pitaya.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/frutas/guanabana.jpg' alt='Card image cap'><div><p class='card-text'>Guanabana.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/frutas/granadilla.jpg' alt='Card image cap'><div><p class='card-text'>Granadilla.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/frutas/frambuesa.jpg' alt='Card image cap'><div><p class='card-text'>Frambuesa.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/frutas/pera.jpg' alt='Card image cap'><div><p class='card-text'>Pera.</p></div></div></div>");

        }

        function Verduras(){
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/verduras/apio.jpg' alt='Card image cap'><div><p class='card-text'>Apio.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/verduras/mazorca.jpg' alt='Card image cap'><div><p class='card-text'>Mazorca.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/verduras/pimenton.jpg' alt='Card image cap'><div><p class='card-text'>Pimenton.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/verduras/repollo.jpg' alt='Card image cap'><div><p class='card-text'>Repollo.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/verduras/tomate.jpg' alt='Card image cap'><div><p class='card-text'>Tomate.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/verduras/coliflor.jpg' alt='Card image cap'><div><p class='card-text'>Coliflor.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/verduras/pepino.jpg' alt='Card image cap'><div><p class='card-text'>Pepino.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/verduras/tomate.jpg' alt='Card image cap'><div><p class='card-text'>Tomate.</p></div></div></div>");

        }

        function Lacteos(){
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/lacteos/leche_chivo.jpg' alt='Card image cap'><div><p class='card-text'>Leche de chivo.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/lacteos/leche_vaca.jpg' alt='Card image cap'><div><p class='card-text'>Leche de vaca.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/lacteos/queso_chivo.jpg' alt='Card image cap'><div><p class='card-text'>Queso de chivo.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/lacteos/queso.png' alt='Card image cap'><div><p class='card-text'>Queso.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/lacteos/Yogurt.jpg' alt='Card image cap'><div><p class='card-text'>Yogurt.</p></div></div></div>");

        }

        function Leguminosas(){
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/leguminosas/arveja.jpg' alt='Card image cap'><div><p class='card-text'>Arveja.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/leguminosas/frijoles.jpg' alt='Card image cap'><div><p class='card-text'>Frijoles.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/leguminosas/garbanzos.jpg' alt='Card image cap'><div><p class='card-text'>Garbanzos.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/leguminosas/habichuela.jpg' alt='Card image cap'><div><p class='card-text'>Habichuela.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/leguminosas/lentejas.jpg' alt='Card image cap'><div><p class='card-text'>Lentejas.</p></div></div></div>");

        }

        function Tuberculos(){
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/tuberculos/arracacha.jpg' alt='Card image cap'><div><p class='card-text'>Arracacha.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/tuberculos/camote.jpg' alt='Card image cap'><div><p class='card-text'>Camote.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/tuberculos/papa.jpg' alt='Card image cap'><div><p class='card-text'>Papa.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/tuberculos/papa_criolla.jpg' alt='Card image cap'><div><p class='card-text'>Papa criolla.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/tuberculos/yuca.jpg' alt='Card image cap'><div><p class='card-text'>Yuca.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/tuberculos/name.jpg' alt='Card image cap'><div><p class='card-text'>Ñame.</p></div></div></div>");


        }

        function AlimentosProcesados(){
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/alimentos_procesados/natuchips_platano_verde.jpg' alt='Card image cap'><div><p class='card-text'>Papas.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/alimentos_procesados/pizza_congelada.jpg' alt='Card image cap'><div><p class='card-text'>Pizza.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/alimentos_procesados/Beagles.jpg' alt='Card image cap'><div><p class='card-text'>Beagles.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/alimentos_procesados/perrito-caliente.jpg' alt='Card image cap'><div><p class='card-text'>Perro caliente.</p></div></div></div>");
            $('#theDiv').prepend("<div class='col-md-3'><div class='card mt-3' style='width: 18rem;'><img class='card-img-top' src='img/alimentos_procesados/hamburguesas.png' alt='Card image cap'><div><p class='card-text'>Hamburguesa.</p></div></div></div>");

        }


    })
</script>
