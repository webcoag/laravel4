@extends('layouts.scaffold')

@section('main')

<h1>All Clients</h1>

<p>{{ link_to_route('clients.create', 'Add new client') }}</p>

@if ($clients->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
				<th>Endereco</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{{ $client->nome }}}</td>
					<td>{{{ $client->endereco }}}</td>
                    <td>{{ link_to_route('clients.edit', 'Edit', array($client->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('clients.destroy', $client->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no clients
@endif

@stop