@extends('layouts.master')

@section('content')
<div class="col-md-6">
{!! Form::model($task, array('method' => 'put', 
    'route' => array('lists.tasks.update', $task->todolist->id, $task->id), 'class' => 'form')) !!}

<h2>Edit a Task (<a href="{{ URL::route('lists.show', $task->todolist->id) }}">{{ $task->todolist->name }}</a>)</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        There were some problems with your input.<br />
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    {!! Form::label('Task Name') !!}
    {!! Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Task Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Due Date') !!}
    {!! Form::input('date', 'due', null, array('class'=>'form-control', 'placeholder' => date('Y-m-d'))) !!}
</div>

<div class="checkbox">
    {!! Form::label('Completed?') !!}
    {!! Form::checkbox('done', 'true') !!}
</div>
<div class="form-group">
    {!! Form::submit('Update Task!', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>
@stop