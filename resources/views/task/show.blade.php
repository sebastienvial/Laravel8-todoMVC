<!-- <h1>
#{{ $task['id'] }}
showView
</h1> -->

@extends('layout')

@section('content')

<h1>Detail of task #{{ $task->id }}</h1>

<p><b>Name : </b>{{ $task->name }}</h1>

<p><a href="{{ route('tasks.index') }}">Back to list</a></p>

@endsection

