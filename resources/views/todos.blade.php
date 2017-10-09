@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-0 form-group">
                <form action="/create/todo" method="post">
                    {{ csrf_field() }}
                    <input type="text" class="form-control input-lg my-5" name="todo" placeholder="Create a new todo">
                </form>
            </div>
        </div>
        <hr>
    </div>

    
    @foreach($todos as $todo)
        {{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger"> X </a>
        <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-success btn-xs"> update </a>
        @if(!$todo->completed)
            <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-info btn-xs">Marked as completed</a>
        @else
            <span class="text-success">Completed!</span>
        @endif
            <hr>
    @endforeach
@endsection