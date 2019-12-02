<html>
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <script language="JavaScript">
                function mueveReloj(){
                    momentoActual = new Date()
                    hora = momentoActual.getHours()
                    minuto = momentoActual.getMinutes()
                    segundo = momentoActual.getSeconds()


                    horaImprimible = hora + " : " + minuto + " : " + segundo

                    document.form_reloj.reloj.value = horaImprimible

                    setTimeout("mueveReloj()",1000)
                }
                </script>


    </head>
    <body onload="mueveReloj()">
        <!-- Modal para realizar edicion-->
 <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header text-center">
       <h4 class="modal-title w-100 font-weight-bold">Hora de Salida</h4>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <form action="{{ url('modificachecador') }}" method="POST">
     @csrf
     <div class="modal-body mx-3">


       <div class=" mb-5">
         <i class="fas fa-cog prefix grey-text"></i>

         <label hidden="" data-error="Error" data-success="Correcto" for="defaultForm-email">id</label>
         <input style="display:none" name="id"   type="text" id="id_checador" class="form-control " >
       </div>
       <div class=" mb-5">
            <i class="fas fa-cog prefix grey-text"></i>

            <label hidden="" data-error="Error" data-success="Correcto" for="defaultForm-email">id</label>
            <input style="display:none" name="id_emp"   type="text" id="id_empleado" class="form-control " >
          </div>
       <div class=" mb-5">
         <i class="fas fa-cog prefix grey-text"></i>

         <label hidden  data-error="Error" data-success="Correcto">Hora de Entrada</label>
          <input  style="display:none" name="hora_entrada"  type="text" id="hora_entrada" class="form-control validate" required="">
       </div>

         <h1>¿Deseas Checar tu Hora de Salida?</h1>



         </div>
         <div class="modal-footer d-flex justify-content-center">

            <button class="btn btn-default">Aceptar</button>
            <button type="button" class="bnt btn-danger" data-dismiss="modal" aria-label="Close">Cancelar</button>
         </div>

       </div>
 </div>
 </form>
</div>
<!--termina edicion -->

<!-- Modal para realizar alta de productos-->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h4 class="modal-title w-100 font-weight-bold">Alta Categoria</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="{{ url('altacheck') }}" method="POST">
    @csrf
    <div class="modal-body mx-3">


            <label>Nombre del Empleado </label>
            <br>
    <select name="empleado_id">
        @foreach ($a2 as $a4)
        <option value="{{$a4->id}}">
        {{$a4->name}} </option>
        @endforeach
        </select>



    </div>
    <div class="modal-footer d-flex justify-content-center">

       <button class="btn btn-default">Registrar</button>
    </div>

  </div>
</div>
</div>
</form>


              </div>

</div>



        <form action="{{route('altacheck')}}" method="POST" name="form_reloj">
                {{ csrf_field() }}
            <input type="text" name="reloj" size="10" readonly>
            </form>

            <center>CHECADOR</center>



                </a>
                <a href="" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modalLoginForm">  Nueva tarea</a>


        <center>
            <br><br><br>
        <table border="2px">
                <tr>
                <th>Nombre del Empleado</th>
                <th>Hora de Entrada</th>
                <th>Hora de Salida</th>
                <th>Opciones</th>
                </tr>
                @foreach ($a1 as $a3)
                <tr>
                <td>{{$a3->name}}</td>
                <td>{{$a3->hora_entrada}}</td>
                <td>{{$a3->hora_salida}}</td>
                <td>
                 <button data-toggle="modal" data-target="#edit"
                       class='fas fa-edit edit btn btn-info id' value="{{ $a3->id }}" onclick='Mostrar(this);'>checar salida</button>
                   </td>


                </tr>
                @endforeach
            </table>
        </center>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
        <script>
                function Mostrar(btn){
                   console.log(btn.value);
                   var route = '{{ url('/modificarchecador') }}' + '/' + btn.value;


                   $.get(route, function(res){
                       $("#id_checador").val(res.id);
                       $("#hora_entrada").val(res.hora_entrada);
                       $("#id_empleado").val(res.empleado_id);

                   });

                 }
               </script>
        @include('checadorempleado.alta')

        <!-- Bootstra p core JavaScript -->

    </body>
</html>
