@extends('base')

@section('content')

    <h1>{{ $course->title }}</h1>

    <hr/>

    <article>

        {{ $course->body }}

    </article>

@stop