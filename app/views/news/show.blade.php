@extends('layouts.scaffold')

@section('main')

<h1>Show News</h1>

<p>{{ link_to_route('news.index', 'Return to all news') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Titulo</th>
				<th>Descricao</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $news->titulo }}}</td>
					<td>{{{ $news->descricao }}}</td>
                    <td>{{ link_to_route('news.edit', 'Edit', array($news->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('news.destroy', $news->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop