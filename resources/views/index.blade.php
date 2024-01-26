@extends('layouts.app')

@section('title', 'The List of Tasks')

@section('content')

    <nav class="mb-4 mt-4">
        <a href="{{ route('tasks.create') }}" class = "font-medium text-gray-700 underline decoration-double underline-offset-4  ">Add Task</a>
    </nav>
    @forelse ($tasks as $task)
    <!-- @dump($task) -->
        <div>
            <a href="{{ route('tasks.show', ['task'=> $task->id]) }}" class="line-through">{{ $task->title }}</a>
           
        </div>
    @empty
        <div>There are no tasks</div>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav> 
    @endif
@endsection
   