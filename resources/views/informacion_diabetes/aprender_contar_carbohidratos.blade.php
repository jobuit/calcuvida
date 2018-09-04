@include('welcome/head')
@include('welcome/header')
@include('welcome/nav')


<style type="text/css">
    * {
        /* margin: 0; */
        /* padding: 0; */
    }
    /*.conteo{
        /* width: 100%; */
        /* max-width: 2000px; */
    }
    /*.timer{
        float:right;
    }
    body {
        /* margin-top: 60px; */
    }
    /*.cont1{
        background: white;
        height: 150px;*/
    }
    .logo{
        width: 150px;
        height: 150px;
        position: relative;
        left: 200px;
    }
    p{
        /* font-size: 65px; */
        /* text-align: center; */
        /* position: relative; */
        /* bottom: 130px; */
    }
    .navbar-nav.navbar-center {
        /* position: absolute; */
        /* left: 50%; */
        /* transform: translatex(-50%); */
    }

    

    .row:after,
    .hitbox:after {
        content: "";
        display: table;
        clear: both;
    }

    [class^="col-"] {
        float: left;
    }

    .col-full {
        /* width: 100%; */
    }

    .col-half {
        width: 50%;
    }

    .col-quarter {
        border: 1px solid #000000;
        width: 24%;
        margin: 0.5%;
        background-color: #fff;
    }

    .hitbox {
        position: relative;
    }

    .hitbox:before {
        display: block;
        content: "";
        padding-top: 100%;
    }

    .dropzone {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-size: 100% auto;
        background-repeat: no-repeat;
        background-position: center;
    }

    .answer {
        width: 25%;
        height: 25%;
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 1;
    }

    .answer.show {
        visibility: visible;
    }

    .answer.hide {
        visibility: hidden;
    }

    .dropzone:not(.container) .icon {
        width: 100%;
        height:80%;
        margin: 0;
    }

    .icon {
        width: 150px;
        margin: 0.5%;
    }

    #dropzone-apple {
        background-image: url("img/titulos/apple-bg.png");
    }

    #dropzone-bananas {
        background-image: url("img/titulos/bananas-bg.png");
    }

    #dropzone-carrot {
        background-image: url("img/titulos/carrot-bg.png");

    }

    #dropzone-cherries {
        background-image: url("img/titulos/cherries-bg.png");
    }

    #dropzone-grapes {
        background-image: url("img/titulos/grapes-bg.png");
    }

    #dropzone-lemon {
        background-image: url("img/titulos/lemon-bg.png");
    }

    #dropzone-pear {
        background-image: url("img/titulos/pear-bg.png");
    }

    #dropzone-strawberry {
        background-image: url('img/titulos/strawberry-bg.png');
    }

    #dropzone-tomato {
        background-image: url("img/titulos/tomato-bg.png");
    }

    #dropzone-watermelon {
        background-image: url("img/titulos/watermelon-bg.png");
    }
    .btn:hover{
        background: #1a95d5;
        transition: 1s;
    }

    .instructions {
        /* text-align: center; */
    }

    @media(max-width: 799px) {
        .col-quarter {
            width: 49%;
        }

        .icon {
            width: 49%;
        }

        .col-half.hitbox {
            padding-top: 100%;
        }
    }
.warning{
    background: #222 !important;
    color: white !important;
}
.timer-box{
    position: relative;
    bottom: 250px;
    right: 80px;
}
/* .timer-box{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    width: 300px;
    /* margin: 3em auto; */
    /* border: 5px solid black; */
    /* max-width: 100px; */
    /* padding: 3px; */
    /* border-radius: 15px; */
    /* background: white; */
    /* height: 300px; */
    /* position: relative; */
    /* bottom: 600px; */
    /* left: 560px; */

} */
h3{
    font-size: 2em;
    position: relative;
    right: 25px;

}
.counter{
    font-size: 2em;
    font-weight: bold;
    position: relative;
    left: ;
}

/* button{
    margin: 1em auto;
    font-size: 1.2em;
    padding: 20px;
    border-radius: 5px;
    border: 2px solid black;
    background: #fff;
    width: 100%;
    position: relative;
    bottom: 20px;
} */
</style>



<div class="container-fluid mt-3">
    <div class="row">
        <h1 class="">Aprendiendo a contar Carbohidratos</h1>
        <p class="blockquote">El proceso del conteo de carbohidratos puede ser un tanto engorroso y dificil en su primera etapa.
            Es necesario tener muy en cuenta las etiquetas de los alimentos que vayamos a consumir. Se debe observar
            la etiqueta de "Total de Carbohidratos"
            Para contar los carbohidratos, observe tres cosas:</p>
        <ul>
            <li class="lead">Tamaño de la porción</li>
            <li class="lead">Cantidad de porciones por envase</li>
            <li class="lead">Gramos de carbohidratos totales por porción</li>
        </ul>

    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6">


            <p class="h3">Primera Prueba de Verduras</p>
            <p class="lead">Su puntuación es:  <span id="score">0</span>/10.</p>
            <p class="lead">La puntuación se calculará en función de la cantidad de íconos que obtuviste bien.</p>


        </div>
        <!--<div class="col-md-6 border d-flex justify-content-center d-flex align-items-center text-white bg-dark">
            <div class="container">
                <div class="conteo d-flex justify-content-center ">
                    <span id="countdown" class="timer h1"></span>
                </div>
            </div>
        </div>-->
    </div>
</div><hr>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h4>Coloque los íconos en el lugar correcto.</h4>
            <h4>Se le informará si obtiene la respuesta correcta o incorrecta.</h4>
        </div>
        <div class="col-md-6">
            <h4>Arrastre las imagenes presentadas en el contenedor a conticacion.</h4>
            <h5>Puede volver a arrastrar las imagenes a este recipiente en caso de que necesite reorganizarlas..</h5>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div id="dropzone-holder" class="col-half">
            <div class="col-quarter hitbox">
                <img class="answer hide" src="<img/correct-green.png" />
                <div id="dropzone-apple" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                </div>
            </div>
            <div class="col-quarter hitbox">
                <img class="answer hide" src="img/correct-green.png" />
                <div id="dropzone-bananas" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                </div>
            </div>
            <div class="col-quarter hitbox">
                <img class="answer hide" src="img/correct-green.png" />
                <div id="dropzone-carrot" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                </div>
            </div>
            <div class="col-quarter hitbox">
                <img class="answer hide" src="img/correct-green.png" />
                <div id="dropzone-cherries" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                </div>
            </div>
            <div class="col-quarter hitbox">
                <img class="answer hide" src="img/correct-green.png" />
                <div id="dropzone-grapes" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                </div>
            </div>
            <div class="col-quarter hitbox">
                <img class="answer hide" src="img/correct-green.png" />
                <div id="dropzone-lemon" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                </div>
            </div>
            <div class="col-quarter hitbox">
                <img class="answer hide" src="img/correct-green.png" />
                <div id="dropzone-pear" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                </div>
            </div>
            <div class="col-quarter hitbox">
                <img class="answer hide" src="img/correct-green.png" />
                <div id="dropzone-strawberry" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                </div>
            </div>
            <div class="col-quarter hitbox">
                <img class="answer hide" src="img/correct-green.png" />
                <div id="dropzone-tomato" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                </div>
            </div>
            <div class="col-quarter hitbox">
                <img class="answer hide" src="<img/correct-green.png" />
                <div id="dropzone-watermelon" class="dropzone" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                </div>
            </div>
        </div>

        <div class="col-half hitbox" >
            <div id="dropzone-container" class="dropzone container" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                <img id="icon-apple" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/arvejas.jpg">
                <img id="icon-bananas" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/apio.png">
                <img id="icon-carrot" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/ahuyama.jpg">
                <img id="icon-cherries" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/Cebolla roja.jpg">
                <img id="icon-grapes" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/coliflor.jpg">
                <img id="icon-lemon" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/tomate_verduras.png">
                <img id="icon-pear" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/pepino.jpg">
                <img id="icon-strawberry" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/ajo.png">
                <img id="icon-tomato" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/pimiento_rojo-verde.jpg">
                <img id="icon-watermelon" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/zanahoria.jpg">


            </div>
            
            

        </div>
        

    </div>

    <div class="container mb-5 timer-box d-flex justify-content-center" style="">
        <div class="row" style="width:400px;">
            <div class="col-md-5 border">
                <h6>
                    <div class="counter text-center" id="counter">--</div>
                    <div class="text-center">Segundos Restantes</div>
                    {{-- <p>Segundos</p>
                    <p>Restantes</p> --}}
                </h6>
            </div>
            <div class="col-md-7">
                {{-- <p class="mt-5">Click Aqui.</p> --}}
                {{-- <i class="fas fa-angle-double-down"></i> --}}
                <button id="start" class="btn ctrl-btn mt-4">INICIAR</button>        
            </div>
        </div>       
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Felicitaciones!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h3 class="text-center">
                        Ganaste la Prueba.
                    </h3>
                </div>                
                <div class="container">
                    <img src="img/emoticon.jpg" alt="" width="60px" class="rounded mx-auto d-block">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>

<script type="text/javascript">
var start = function(e) {
				e.dataTransfer.effectAllowed = 'move';
				e.dataTransfer.setData('iconId', e.target.id);
				e.dataTransfer.setDragImage(e.target, 0, 0);
				return true;
			}
			var enter = function(e) {
				return true;
			}
			var over = function(e) {
				var iconId = e.dataTransfer.getData('iconId');
				var targetId = e.target.id;
				if (targetId.indexOf('icon') > -1) {
					return true;
				}
				return false;
			}
			var drop = function(e) {
				var iconId = e.dataTransfer.getData('iconId');
				var icon = document.getElementById(iconId);
				e.target.appendChild(icon);
				e.stopPropagation();
				return false;
			}
			var end = function(e) {
				e.dataTransfer.clearData('iconId');
				return true;
			}
			var pollResults = function() {
				var score = document.getElementById('score');
				score.innerHTML = 0;
				var hitboxes = document.getElementById('dropzone-holder').children;
				for (var i = 0; i < hitboxes.length; ++i) {
					var hitbox = hitboxes[i];
					var dropzone = hitbox.lastElementChild;
					if (dropzone.children.length > 0) {
						dropzone.style.backgroundSize = '0';
						var dropzoneId = dropzone.id;
						var iconId = dropzone.firstElementChild.id;

						var dropzoneName = dropzoneId.substring(dropzoneId.indexOf('-') + 1);
						var iconName = iconId.substring(iconId.indexOf('-') + 1);

						dropzone.previousElementSibling.setAttribute('class', 'answer show');

						if (iconName == dropzoneName) {
							dropzone.previousElementSibling.src = 'img/correct-green.png';
							score.innerHTML = parseInt(score.innerHTML) + 1;
						} else {
							dropzone.previousElementSibling.src = 'img/wrong-red.png';
						}
					} else {
						dropzone.previousElementSibling.setAttribute('class', 'answer hide');
						dropzone.style.backgroundSize = '100% auto';
					}
				}
				if (parseInt(score.innerHTML) == 10) {
                    $('#modal').modal('show');
					//alert("felicitaciones pasaste la Prueba");
					//document.location()
				}
			}
			setInterval(pollResults, 50);
			var shuffleIcons = function() {
				var dropzoneContainer = document.getElementById('dropzone-container');
				var icons = dropzoneContainer.children;
				var fragment = document.createDocumentFragment();
				while (icons.length) {
					fragment.appendChild(icons[Math.floor(Math.random() * icons.length)]);
				}
				dropzoneContainer.appendChild(fragment);
			}
			var shuffleDropzones = function() {
				var dropzoneHolder = document.getElementById('dropzone-holder');
				var dropzones = dropzoneHolder.children;
				var fragment = document.createDocumentFragment();
				while (dropzones.length) {
					fragment.appendChild(dropzones[Math.floor(Math.random() * dropzones.length)]);
				}
				dropzoneHolder.appendChild(fragment);
			}
			window.onload = function() {
				shuffleIcons();
				shuffleDropzones();
			}
		</script>
		<!--script de la caja de tiempo-->
			<script>
				var Timer = (function() {
    function Timer() {};
    Timer.prototype.countDown = function(time) {
        var id = setInterval(function() {
            $('#counter').text(time);
            // stop timer at 0
            if (time < 10) {
              $('.timer-box').toggleClass('warning');
            }
            if (time === 0) {
              clearInterval(id);
            }
            time--;
        }, 1000);
    };
    return Timer;
})();

var $start = $('#start');

var t = new Timer;

$(document).ready(function() {
    $start.click(function() {
        var time = 180;
        t.countDown(time);
    });
});


</script>

@include('welcome/footer')
