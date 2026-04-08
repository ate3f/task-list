@extends('layouts.app')

@section('title', 'Task List')
@section('content') 
  @forelse ($tasks as $task)
    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
    <br>
  @empty
    <div>no tasks!</div>
  @endforelse
@endsection