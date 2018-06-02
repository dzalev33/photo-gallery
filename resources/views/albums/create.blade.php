@extends('layouts.app')

@section('content')
    <h3>Create Album</h3>
    {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    {{Form::text('name', '', ['Placeholder' => 'Album Name'])}}
    {{Form::textarea('description', '', ['Placeholder' => 'Album Description'])}}
    {{Form::file('cover_image')}}
    {{Form::submit('submit')}}
    {!! Form::close() !!}

@endsection
