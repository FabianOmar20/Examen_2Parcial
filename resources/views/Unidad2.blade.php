@extends('Template.Layout')
@section('Contenido2')
<div class="left">
@foreach($unidades as $unidad)
<h1>{!!$unidad['titulo']!!}</h1>
<br>
{{!!$unidad['descripcion']!!}}
<br>
<img src="{{$unidad['url']}}" alt="">
<hr>
@endforeach
</div>
@endsection