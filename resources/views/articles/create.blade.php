@extends('app')

@section('content')
    <h1> Write a New Articles </h1>
    <hr/>
    {!! Form::model($article = new \App\Article, ['url' => 'articles']) !!}
{{--    {!! Form::open(['url' => 'articles']) !!}--}}
        @include('articles._form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

    @include('errors.list')

@stop