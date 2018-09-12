@include('welcome/head')
@include('welcome/header')
@include('welcome/nav')

<div class="container mt-3">
    <div class="row">
        <h1 class="">Aprendiendo a contar Carbohidratos</h1>
        <p class="blockquote">El proceso del conteo de carbohidratos puede ser un tanto engorroso y dificil en su primera etapa.
            Es necesario tener muy en cuenta las etiquetas de los alimentos que vayamos a consumir. Se debe observar
            la etiqueta de "Total de Carbohidratos"
            Para contar los carbohidratos, observe tres cosas:</p>
        <ul>
            <li class="lead" id="scroll">Tamaño de la porción</li>
            <li class="lead">Cantidad de porciones por envase</li>
            <li class="lead">Gramos de carbohidratos totales por porción</li>
        </ul>

    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div>
        <h6>Selecciona una seccion para empezar a jugar</h6>
        <div class="collapse navbar-collapse  d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="cereales" value="1" data-toggle="modal" data-target="#exampleModal">Cereales</button></li>
                <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="frutas" value="2" data-toggle="modal" data-target="#exampleModal">Frutas</button></li>
                <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="verduras" value="3" data-toggle="modal" data-target="#exampleModal">Verduras</button></li>
                <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="lacteos" value="6" data-toggle="modal" data-target="#exampleModal">lacteos</button></li>
                <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="leguminosas" value="5" data-toggle="modal" data-target="#exampleModal">Leguminosas</button></li>
                <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="tuberculos" value="4" data-toggle="modal" data-target="#exampleModal">Tuberculos</button></li>
                <li class="nav-item active mx-1"><button class="btn btn-outline-success" id="alimentos_procesados" value="7" data-toggle="modal" data-target="#exampleModal">Alimentos procesados</button></li>
            </ul>
        </div>
    </div>

    <div class="text-center pr-3 pl-3" style="width: 100%">
        <div class="row">
            <p class="col" id="puntuacionTxt">Puntuacion: 0/0</p>

            <div class="col" id="d-timer">

            </div>
        </div>

        <audio id="good">
            <source src="sounds/good.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <audio id="bad">
            <source src="sounds/bad.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
        </div>
    </div>
</nav>

<div class="container-fluid d-flex justify-content-center">
    <div class='row'>
        <div class="col-4" id="contentImgs">

        </div>

        <div class="col-8">
            <div class='row' id="contentCajas">

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aprendiendo a contar</h5>
                <a type="button" id="x" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body text-center">
                <p id="exampleModalDescripcion">Arrastra las imaganes a su respectiva posicion</p>
                <img src="img/dragdrop_hd.gif" id="exampleModalImg">
                <a type="button" id="exampleModalButton" class="btn btn-primary close" data-dismiss="modal">Entendido</a>
            </div>
        </div>
    </div>
</div>


<!--<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function () {

        var mayor=0;

        $("button").on("click", function (e) {

            $( "#contentImgs" ).empty();
            $( "#contentCajas" ).empty();

            valor = $(this).attr('value');
            BuscarAlimentos(valor);

        });

        function BuscarAlimentos(txt){
            $.ajax({
                url:"{{route('buscarAlimentosByCategoria')}}",
                mehtod:"get",
                data:{buscar:txt},
                success:function(response)
                {
                    // console.log(response);

                    if($.trim(response)){
                        var newImgs = "";
                        var newCajas = "";

                        if (response.length < 8) {
                            mayor=response.length;
                        }else{
                            mayor=8;
                        }

                        for (var i = 0; i < mayor; i++) {

                                newImgs = "<img class='imgs' id='"+i+"' src='"+response[i].img+"' alt='Card image cap' style='width: 12rem; height: 100px;'>";
                                $('#contentImgs').append(newImgs);

                                newCajas = "<div class='col caja' id='"+i+"' style='padding: 0 !important;margin: 0 !important; width: 13rem; border: 1px solid lightgray;'>" +
                                    "<img style='width: 30px; height: 30px; visibility: hidden;' />"+
                                    "<div style='width: 13rem; height: 110px;'/>" +
                                    "<p class='font-weight-bold' style='padding: 0 !important;margin: 0 !important;'>"+response[i].nombre+"</p>" +
                                    "<small class='font-weight-bold'>Carbohidratos  </small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].gramo_carbohidrato+"</small>"+
                                    "</div>";

                                $('#contentCajas').append(newCajas);

                        }

                        $('#contentCajas').randomize('.caja');
                        arrastrar();
                    }
                }
            });
        }

        $.fn.randomize = function(selector){
            (selector ? this.find(selector) : this).parent().each(function(){
                $(this).children(selector).sort(function(){
                    return Math.random() - 0.5;
                }).detach().appendTo(this);
            });

            return this;
        };

        function arrastrar() {
            var buenas=0;
            var cont=0;

            $( ".imgs" ).draggable();

            $( ".caja" ).droppable({
                drop: function( event, ui ) {
                    cont+=1;

                    var currentID = ui.draggable.attr('id');
                    console.log(currentID+$(this).attr('id'));

                    if (ui.draggable.attr('id')===$(this).attr('id')){
                        $(this).find('img').css({ visibility: "visible" });
                        $(this).find('img').attr("src","img/correct-green.png");
                        console.log('gano');
                        $('#good')[0].play();
                        buenas+=1;
                    }else{
                        console.log('perdio');
                        $(this).find('img').css({ visibility: "visible" });
                        $(this).find('img').attr("src","img/wrong-red.png");
                        $('#bad')[0].play();
                    }

                    if(cont===mayor){
                        dTimer.stop();

                        if(buenas>(mayor/2)){
                            $("#exampleModalLabel").html("Ganaste el juego");
                            $("#exampleModalDescripcion").html("Felicidades tu puntaje fue "+buenas+"/"+mayor);
                            $('#exampleModalImg').attr("src","img/emoticon.jpg").css({ width: "70px",height:"70px" });
                        }else{
                            $("#exampleModalLabel").html("Perdiste el juego");
                            $("#exampleModalDescripcion").html("Lo siento tu puntaje fue "+buenas+"/"+mayor);
                            $('#exampleModalImg').attr("src","img/perdiste.png").css({ width: "70px",height:"70px" });
                        }
                        $("#exampleModalButton").css({ visibility: "hidden" });
                        $("#exampleModal").modal();
                    }

                    var siz = (cont)*100/(mayor);
                    actualizarProgress(siz,buenas);

                }
            });
        }

        function actualizarProgress(siz,buenas) {
            $("#puntuacionTxt").html("Puntuacion: "+buenas+"/"+mayor);
            $('.progress-bar').css('width', siz+'%');
            $('.progress-bar').html(siz+"%")
        }

        $("a").on("click", function (e) {
            var id = $(this).attr('id');

            if(id==="x"){
                location.reload();
            }else{
                dTimer.start();
                window.location.href = "#scroll";
            }

        });

        var Stopwatch = function(elem, options) {

            var timer       = createTimer(),
                offset,
                clock,
                interval;

            // default options
            options = options || {};
            options.delay = options.delay || 1;

            // append elements
            elem.appendChild(timer);

            // initialize
            reset();

            // private functions
            function createTimer() {
                return document.createElement("span");
            }

            function start() {
                if (!interval) {
                    offset   = Date.now();
                    interval = setInterval(update, options.delay);
                }
            }

            function stop() {
                if (interval) {
                    clearInterval(interval);
                    interval = null;
                }
            }

            function reset() {
                clock = 0;
                render(0);
            }

            function update() {
                clock += delta();
                render();
            }

            function render() {
                timer.innerHTML = "00:"+float2int((clock/1000));
            }

            function float2int (value) {
                return value | 0;
            }

            function delta() {
                var now = Date.now(),
                    d   = now - offset;

                offset = now;
                return d;
            }

            // public API
            this.start  = start;
            this.stop   = stop;
            this.reset  = reset;
        };

        var d = document.getElementById("d-timer");
        dTimer = new Stopwatch(d, {delay: 1000});

    })

</script>


@include('welcome/footer')

