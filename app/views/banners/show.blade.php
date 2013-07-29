@extends('layouts.scaffold')

@section('main')

<h1>Show Banner</h1>

<p>{{ link_to_route('banners.index', 'Return to all banners') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Url</th>
				<th>Descricao</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $banner->url }}}</td>
					<td>{{{ $banner->descricao }}}</td>
                    <td>{{ link_to_route('banners.edit', 'Edit', array($banner->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('banners.destroy', $banner->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop