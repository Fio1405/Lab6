@extends('tasks.layout')

@section('content')
<div class='container'>
<h1>Crear una tarea</h1>
<hr>
<form action="/tasks" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
                <label for="user">Usuario</label>
                <select name="user" id="user" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            <div>
    <div>
        <label for="status" class="form-label">Prioridad</label>
        <select class="form-select" id="priority" name="priority">
            @foreach($priorities as $priority)
            <option value="{{ $priority->id }}">{{ $priority->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="labels" class="form-label">Etiquetas</label>
        <select class="form-select" id="labels" name="labels[]" multiple>
            @foreach($labels as $label)
            <option value="{{ $label->id }}">{{ $label->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</div>
@endsection