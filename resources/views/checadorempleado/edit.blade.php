
<div class="modal fade" id="create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                    <h4>Editar</h4>
                </div>
                <div class="modal-body">

                    <form action="{{route('modificachecador')}}" method="POST">
                        {{ csrf_field() }}
                            <center>
                                <label>Nombre del Empleado </label>
                                <br>
                                <input type="text" name="id" value="{{$salida->id}}"readonly >
                                <input type="text" name="empleado_id" value="{{$salida->empleado_id}}"readonly >
                                <input type="text" name="hora_entrada" value="{{$salida->hora_entrada}}"readonly >


                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </div>
        </div>
    </div>
