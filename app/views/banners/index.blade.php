@extends('layouts.scaffold')

@section('main')

<h1>All Banners</h1>

<p>{{ link_to_route('banners.create', 'Add new banner') }}</p>

@if ($banners->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Url</th>
				<th>Descricao</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($banners as $banner)
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
            @endforeach
        </tbody>
    </table>
@else
    There are no banners
@endif

@stop