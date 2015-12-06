@extends('base')

@section('content')

    <h1>{{ $course->title }}</h1>

    <hr/>

    <article>

        {{ $course->body }}

    </article>

    @unless($course->tags->isEmpty())
    <h5>Tags:</h5>

    <ul>
    	@foreach($course->tags as $tag)
    		<li>{{ $tag->name }}</li>
    	@endforeach
    </ul>
    @endunless

@stop