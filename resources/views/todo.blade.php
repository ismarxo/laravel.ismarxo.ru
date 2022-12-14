@extends('layout')

@section('content')
    <div class="column">
        <div class="title"> TODO APP </div>
        @include('todo.header')
        @include('todo.list', $issues)
        @include('todo.footer')
    </div>
@stop


