<style type="text/css">
    * {
        /* margin: 0; */
        /* padding: 0; */
    }
    .conteo{
        /* width: 100%; */
        /* max-width: 2000px; */
    }
    .timer{
        float:right;
    }
    body {
        /* margin-top: 60px; */
    }
    .cont1{
        background: white;
        height: 150px;
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
        width: 24%;
        margin: 0.5%;
        background-color: #ebdea4;
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
        height: 100%;
        margin: 0;
    }

    .icon {
        width: 25%;
        margin: 0.5%;
    }

    /*#dropzone-apple {
        background-image: url("../../img/titulos/apple-bg.png");
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
        <div class="col-md-6 border d-flex justify-content-center d-flex align-items-center text-white bg-dark">
            <div class="container">
                <div class="conteo d-flex justify-content-center ">
                    <span id="countdown" class="timer h1"></span>
                </div>
            </div>
        </div>
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
                <img id="icon-strawberry" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/ajo.png" width="128px" height="128px">
                <img id="icon-tomato" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/pimiento_rojo-verde.jpg">
                <img id="icon-watermelon" class="icon" draggable="true" ondragstart="return start(event)" ondragend="return end(event)" src="img/verduras/zanahoria.jpg">

            </div>
        </div>
    </div>

</div>



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
            alert('Congratulations! ganaste la primera prueba!');
            document.location.href="index.php/Aprender_a_contar/Aprender";
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
<script>
    var seconds = 180;

    // alert("que comience el juego")
    function secondPassed(){
        var minutes = Math.round((seconds - 30) / 60);
        var remainingSeconds = seconds % 60;

        if (remainingSeconds < 10) {
            remainingSeconds = "0" + remainingSeconds;
        }

        document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
        if (seconds == 0) {
            clearInterval(countdownTimer);
            document.getElementById('countdown').innerHTML = alert("perdiste");
            document.location.href="index.php/Aprender_a_contar/Aprender";
        } else{
            seconds --;
        }
    }
    var countdownTimer = setInterval('secondPassed()', 1000);
</script>



</div>
<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script> -->

