@extends('layouts.app')

@section('title', 'The List of Tasks')

@section('content')
    @forelse ($tasks as $task)
    <!-- @dump($task) -->
        <div>
            <a href="{{ route('tasks.show', ['id'=> $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>There are no tasks</div>
    @endforelse
@endsection

   