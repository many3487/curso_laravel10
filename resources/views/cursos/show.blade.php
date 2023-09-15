@extends('layouts.plantilla')

@section('title','Curso '.$curso)

@section('content')
<h1 style='color: red';>Bienvenido al curso: <?php echo $curso ?></h1>
@endsection
