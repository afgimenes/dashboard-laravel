@extends('layouts.app')

@section('title', 'Lista de usuario')
    
@section('content')
<h1>Lista de usuario {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>    
    <li>{{ $user->email }}</li>   
</ul>
@endsection