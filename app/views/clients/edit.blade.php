@extends('layouts.scaffold')

@section('main')

<h1>Edit Client</h1>
{{ Form::model($client, array('method' => 'PATCH', 'route' => array('clients.update', $client->id))) }}
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
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('clients.show', 'Cancel', $client->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop