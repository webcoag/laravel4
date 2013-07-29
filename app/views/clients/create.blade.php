@extends('layouts.scaffold')

@section('main')

<h1>Create Client</h1>

{{ Form::open(array('route' => 'clients.store')) }}
    <ul>
        <li>
            {{ Form::label('nome', 'Nome:') }}
            {{ Form::text('nome') }}
        </li>

        <li>
            {{ Form::label('endereco', 'Endereco:') }}
            {{ Form::text('endereco') }}
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


