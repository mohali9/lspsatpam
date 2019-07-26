{{-- @extends('adminlte::page') --}}
@extends('layouts.app')


@section('content')

{{-- <li class="nav-item">
	<a class="nav-link" href="{{ route('post.create') }}">Tambah</a>
</li> --}}

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-md-offset-2">
			@foreach($posts as $post)
			<div class="card">
				<div class="card-header">
					<a href="{{ route('post.show', $post) }}"> {{ $post->title }} </a> {{ $post->created_at->diffForHumans() }}
				</div>

				<div class="pull-right">
					<a href="{{ route('post.edit', $post) }}" class="btn btn-primary btn-sm">Edit</a>
					<br>
					<form class="" action="{{ route('post.destroy', $post) }}" method="post" accept-charset="utf-8">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger btn-sm">hapus</button>
					</form>
				</div>

				<div class="card-body">
					<p>{{ str_limit($post->content, 200, '....')}}</p>
				</div>
			</div>
			@endforeach
			<br>
			{!! $posts->render() !!}

		</div>
	</div>
</div>
@endsection