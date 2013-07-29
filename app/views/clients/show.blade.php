@extends('layouts.scaffold')

@section('main')

<h1>Show Client</h1>

<p>{{ link_to_route('clients.index', 'Return to all clients') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
				<th>Endereco</th>
        </tr>
    </thead>

    <tbody>
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
    </tbody>
</table>

@stop