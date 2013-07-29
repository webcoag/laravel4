@extends('layouts.scaffold')

@section('main')

<h1>Edit News</h1>
{{ Form::model($news, array('method' => 'PATCH', 'route' => array('news.update', $news->id))) }}
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
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('news.show', 'Cancel', $news->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop