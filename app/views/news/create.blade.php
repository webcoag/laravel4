@extends('layouts.scaffold')

@section('main')

<h1>Create News</h1>

{{ Form::open(array('route' => 'news.store')) }}
    <ul>
        <li>
            {{ Form::label('titulo', 'Titulo:') }}
            {{ Form::text('titulo') }}
        </li>

        <li>
            {{ Form::label('descricao', 'Descricao:') }}
            {{ Form::textarea('descricao') }}
        </li>

        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop


