@include('welcome/head')
@include('welcome/nav')

<div class="container-fluid mt-2">
    
    <table class="table table-sm" id="tabla">
        <thead>
        <tr class="bg-success">
            <th scope="col"></th>
            <th scope="col">Alimento</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Calorias</th>
            <th scope="col">Carbohidratos</th>
            <th scope="col">Grasas totales</th>
            <th scope="col">Proteinas</th>
        </tr>
        </thead>
        <tbody id="operacion">

        </tbody>
        <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Total</th>
            <th scope="col" id="totalCalo">0</th>
            <th scope="col" id="totalCarbo">0</th>
            <th scope="col" id="totalGrasas">0</th>
            <th scope="col" id="totalProte">0</th>
        </tr>
    </table>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <h4 class="card-title">Lista de Alimentos</h4>           
        </div>
        <div class="col-md-4">
            <i><h6 class="mt-2">(*Seleccione de la tabla los alimentos a consumir.)</h6></i>           

        </div>
        <div class="form-inline ml-5 txt" style="position:relative; left:100px;">
            <h4 class="mr-4">Filtro:</h4>
            <input type="text" class="form-control mr-2" name="busqueda" id="txtBuscar" value="">
            <!-- <input type="text" class="form-control mr-2" id="txtBuscar" name="busqueda"> -->
            <button type="button" name="" id="buscar" class="btn btn-success">Buscar</button>

        </div>
    </div>
</div>


<div class='table-responsive table-sm'>
    <table id="contenido" class='table table-hover table-bordered table-condensed'>
        <thead class='thead-dark'>
        <tr>
            <th style='text-align: center;'>Tipo</th>
            <th style='text-align: center;'>Nombre</th>
            <th style='text-align: center;'>Peso Porcion</th>
            <th style='text-align: center;'>Gramo Carbohidrato</th>
            <th style='text-align: center;'>Indice Glusemico</th>
            <th style='text-align: center;'>Tamaño Porcion</th>
            <th style='text-align: center;'>Calorias</th>
            <th style='text-align: center;'>Grasas totales</th>
            <th style='text-align: center;'>Grasas saturadas</th>
            <th style='text-align: center;'>Fibra dietaria</th>
            <th style='text-align: center;'>Grasas trans</th>
            <th style='text-align: center;'>Sodio</th>
            <th style='text-align: center;'>Proteinas</th>
            <th style='text-align: center;'>Potasio</th>
        </tr>
        </thead>
        <tbody>
        <tr></tr>
        </tbody>
    </table>
</div>

@include('welcome/footer')


<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript">
</script>

<script type="text/javascript">
    $(document).ready(function() {
        var id;
        var nombre;
        var calorias;
        var carbohidratos;
        var grasas;
        var prote;

        BuscarAlimentos('');

        function InsertarOperacion(id) {

            var table = document.getElementById("operacion");
            // Create an empty <tr> element and add it to the 1st position of the table:
            var row = table.insertRow(0);
            row.id="tr"+id;
            // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
            // Add some text to the new cells:
            cell1.innerHTML = "<button value='"+id+"' class='fas fa-trash-alt'></button>";

            cell2.innerHTML = nombre;

            cell3.innerHTML = "<select attr-id = '"+id+"' class='custom-select' id='inputGroupSelect-" + id + "' style='width:100px;'>" +
                "<option value='1'>1</option>" +
                "<option value='2'>2</option>" +
                "<option value='3'>3</option>" +
                "<option value='4'>4</option>" +
                "<option value='5'>5</option>" +
                "<option value='6'>6</option>" +
                "<option value='7'>7</option>" +
                "<option value='8'>8</option>" +
                "<option value='9'>9</option>" +
                "</select>";
            cell3.id="inputGroupSelect";

            cell4.innerHTML = calorias;
            cell4.id="calorias";
            cell4.value=calorias;

            cell5.innerHTML = carbohidratos;
            cell5.id="carbohidratos";
            cell5.value=carbohidratos;

            cell6.innerHTML = grasas;
            cell6.id="grasas";
            cell6.value=grasas;

            cell7.innerHTML = prote;
            cell7.id="prote";
            cell7.value=prote;

            ActualizarTotales();
        }

        function DeleteElement() {
            $("button").click(function() {
                console.log($(this).val());
                $(document.getElementById("operacion")).find('#tr'+$(this).val()).html("");
                ActualizarTotales();
            });
        }

        function ActualizarTotales() {
            var table = document.getElementById("operacion");
            var totalCar = 0;
            var totalCalo = 0;
            var totalGras = 0;
            var totalProte = 0;

            $(table).find('tr').each(function() {

                if ($(this).find('#calorias').html()!=null &&
                    $(this).find('#carbohidratos').html()!=null &&
                    $(this).find('#grasas').html()!=null &&
                    $(this).find('#prote').html()!=null){

                    totalCalo+=parseInt($(this).find('#calorias').html(), 10);
                    totalCar+=parseInt($(this).find('#carbohidratos').html(), 10);
                    totalGras+=parseFloat($(this).find('#grasas').html());
                    totalProte+=parseFloat($(this).find('#prote').html());
                }

            });

            $("#totalCarbo").html(totalCar);
            $("#totalCalo").html(totalCalo);
            $("#totalGrasas").html(totalGras);
            $("#totalProte").html(totalProte);
        }

        function MoveSelect() {

            $("select[id*=inputGroupSelect]").change(function() {

                var val=$(this).val();

                $(document.getElementById("operacion")).find('#tr'+$(this).attr("attr-id")).each(function() {

                    var cal=parseInt($(this).find('#calorias').val(), 10);
                    var ca=parseInt($(this).find('#carbohidratos').val(), 10);
                    var gra=parseFloat($(this).find('#grasas').val());
                    var pro=parseFloat($(this).find('#prote').val());

                    pro=pro*val;
                    gra=gra*val;

                    $(this).find('#calorias').html(cal*val);
                    $(this).find('#carbohidratos').html(ca*val);
                    $(this).find('#grasas').html(Number(gra).toFixed(2));
                    $(this).find('#prote').html(Number(pro).toFixed(2));

                    ActualizarTotales();
                });
            });
        }

        function moveElement() {
            $("#contenido tbody > tr").click(function() {
                var id = $(this).attr('id');

                $.ajax({
                    url:"{{route('cogerAlimento')}}",
                    mehtod:"get",
                    data:{id:id},
                    success:function(response)
                    {
                        console.log(response.gramo_carbohidrato);

                        if($.trim(response)){
                            nombre = response.nombre;
                            calorias = response.calorias;
                            carbohidratos = response.gramo_carbohidrato;
                            grasas = response.grasas_totales;
                            prote = response.proteinas;

                            InsertarOperacion(id);
                            MoveSelect();
                            DeleteElement();
                        }
                    }
                });

            });
        }


        $("button").on("click", function() {

            var txt = $('#txtBuscar').val();
            BuscarAlimentos(txt);

        });

        function BuscarAlimentos(txt) {

            $("#contenido tr>td").remove();

            $.ajax({
                url:"{{route('buscarAlimentos')}}",
                mehtod:"get",
                data:{buscar:txt},
                success:function(response)
                {
                   // console.log(response);

                    if($.trim(response)){
                        var newRows = "";
                        for (var i = 0; i < response.length; i++) {
                            newRows += "<tr id='" + response[i].id + "'><td>" + response[i].tipo_alimentos_id +
                                "</td><td>" + response[i].nombre + "</td>" +
                                "</td><td>" + response[i].peso_porcion + "</td>" +
                                "</td><td>" + response[i].gramo_carbohidrato + "</td>" +
                                "</td><td>" +  console.log(<?php  json_encode(App\IndiceGlucemico::find(2));  ?>) + "</td>" +
                                "</td><td>" + response[i].tamano_porcion + "</td>" +
                                "</td><td>" + response[i].calorias + "</td>" +
                                "</td><td>" + response[i].grasas_totales + "</td>" +
                                "</td><td>" + response[i].grasas_saturadas + "</td>" +
                                "</td><td>" + response[i].fibra_dietaria + "</td>" +
                                "</td><td>" + response[i].grasas_trans + "</td>" +
                                "</td><td>" + response[i].sodio + "</td>" +
                                "</td><td>" + response[i].proteinas + "</td>" +
                                "</td><td>" + response[i].potasio + "</td>" +
                                "</tr>";
                        }
                        $("#contenido tbody > tr:first").after(newRows);

                        moveElement();
                    }
                }
            });

        }

    })
</script>
