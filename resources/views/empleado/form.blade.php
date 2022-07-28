@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="Nombre">Nombre:</label>
    <input class="form-control" type="text" name="Nombre"
        value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}" id="Nombre">
</div>
<div class="form-group">
    <label for="Apellido">Apellido:</label>
    <input class="form-control" type="text" name="Apellido"
        value="{{ isset($empleado->Apellido) ? $empleado->Apellido : old('Apellido') }}" id="Apellido">
</div>
<div class="form-group">
    <label for="Correo">Correo:</label>
    <input class="form-control" type="email" name="Correo"
        value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}" id="Correo">
</div>
<div class="form-group">
    <label for="Foto">Foto:</label>
    @if (isset($empleado->Foto))
        <img class="img-thumbnail img-fluid" width="100" src="{{ asset('storage') . '/' . $empleado->Foto }}"
            alt="">
    @endif
    <input class="form-control" type="file" name="Foto" id="Foto">
</div>
<br>
<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">
<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>
