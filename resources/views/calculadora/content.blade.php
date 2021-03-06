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
        <div class="form-inline txt" style="position:relative; left:px;">
            <h5 class="mr-2">Busqueda de alimentos:</h5>
            <input type="text" class="form-control mr-2" name="busqueda" id="txtBuscar" value="">
            <!-- <input type="text" class="form-control mr-2" id="txtBuscar" name="busqueda"> -->
            <button type="button" name="" id="buscar" class="btn btn-success">Buscar</button>

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row ml-4" id="contenedorLista">

    </div>
</div>




@include('welcome/footer')

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
            $("#totalGrasas").html(Number(totalGras).toFixed(2));
            $("#totalProte").html(Number(totalProte).toFixed(2));
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
            $("#contenedorLista div > a").click(function() {
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

            $("#contenedorLista div").remove();

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


                            newRows += "<div class='m-1'><a class='col' id='" + response[i].id + "' href='javascript:void(0);' style='text-decoration: none; color: inherit;'><div class='card' style='width: 18rem;'>" +
                                "<img class='card-img-top' src='"+response[i].img+"' alt='Card image cap' style='width: 18rem; height: 150px;'>" +
                                "<div class='card-body'>" +
                                "<h5 class='card-title'>"+response[i].nombre+"</h5>" +
                                "<table class='table'><tbody>"+
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Porcion</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].tamano_porcion+"</small></td></tr>" +
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Peso porcion</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].peso_porcion+"</small></td></tr>" +
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Carbohidratos</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].gramo_carbohidrato+"</small></td></tr>" +
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Calorias</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].calorias+"</small></td></tr>" +
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Grasas totales</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].grasas_totales+"</small></td></tr>" +
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Grasas saturadas</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].grasas_saturadas+"</small></td></tr>" +
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Grasas trans</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].grasas_trans+"</small></td></tr>" +
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Fibra dietaria</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].fibra_dietaria+"</small></td></tr>" +
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Proteinas</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].proteinas+"</small></td></tr>" +
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Sodio</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].sodio+"</small></td></tr>" +
                                "<tr><th style='padding: 0 !important;margin: 0 !important;'><small class='font-weight-bold'>Potasio</small></th><td style='padding: 0 !important;margin: 0 !important;'><small>"+response[i].potasio+"</small></td></tr>" +
                                "</tbody></table>"+
                                "</div>"+
                                "</div>"+
                                "</a>" +
                                "</div>";
                        }

                        $('#contenedorLista').append(newRows);

                        moveElement();
                    }
                }
            });

        }

    })
</script>
