@extends('layouts.app')

@section('title', 'Novo usuario')
    
@section('content')
<h1>Novo usuario</h1>


<form action="#" method="post">
    <input type="text" name="name" placeholder="Nome:">
    <input type="email" name="email" placeholder="E-mail:">
    <input type="password" name="password" placeholder="Senha:">
    <button type="submit">
        Enviar
    </button>
</form>
@endsection