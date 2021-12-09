@extends('dashboard.master')
@section('content')
    <h6>Editar Publicacion</h6>
    <form action="{{ route('post.update',$post ->id ) }}" method="POST">
        @method('PUT') 
        @include('dashboard.post._form')
    </form>
@endsection