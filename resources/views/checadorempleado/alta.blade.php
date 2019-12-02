
<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                <h4>Crear</h4>
            </div>
            <div class="modal-body">
                <!DOCTYPE html>

                <form action="{{route('altacheck')}}" method="POST">
                    {{ csrf_field() }}
                        <center>
                            <label>Nombre del Empleado </label>
                            <br>
                    <select name="empleado_id">
                        @foreach ($a2 as $a4)
                        <option value="{{$a4->id}}">
                        {{$a4->name}} </option>
                        @endforeach
                        </select>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </div>
    </div>
</div>
