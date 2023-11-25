<form action="{{ url('/ventas') }}" method="post" enctype="multipart/form-data">
@csrf
@include('venta.form',['modo'=>'Crear']);

</form>