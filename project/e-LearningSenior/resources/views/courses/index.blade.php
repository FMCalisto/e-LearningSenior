@extends('base')

@section('content')

    <h1>Courses</h1>

    <hr/>

    @foreach($courses as $course)

        <article>

            <h2>

                <a href="{{ url('/courses', $course->id) }}">

                    {{ $course->title }}
                
                </a>

            </h2>

            <div class="body">

                {{ $course->body }}

            </div>

        </article>

    @endforeach

@stop