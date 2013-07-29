@extends('layouts.scaffold')

@section('main')

<h1>Edit Banner</h1>
{{ Form::model($banner, array('method' => 'PATCH', 'route' => array('banners.update', $banner->id))) }}
    <ul>
        <li>
            {{ Form::label('url', 'Url:') }}
            {{ Form::text('url') }}
        </li>

        <li>
            {{ Form::label('descricao', 'Descricao:') }}
            {{ Form::textarea('descricao') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('banners.show', 'Cancel', $banner->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop