crear empleado

<form method="post" action="{{url('/Empleado')}}" enctype="multipart/form-data">
<!-- llave de seguridad token -->
@csrf
@include('Empleado.form');

</form>