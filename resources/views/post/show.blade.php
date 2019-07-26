{{-- @extends('adminlte::page') --}}
@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-md-offset-2">

				<div class="card">
					<div class="card-header">{{ $post->title }} | <small>{{ $post->category->name }}</small> </div>

					<div class="card-body">
						<p>{{ ($post->content) }}</p>
					</div>
				</div>

				<div class="card">
					<div class="card-header">Tambahkan Komentar</div>

					@foreach ($post->comments()->get() as $comment)
						<div class="card-body">
							<h4>{{ $comment->user->name }} - {{ $comment->created_at->diffForHumans() }}</h4>
							<p>{{ $comment->message }}</p>
						</div>
					@endforeach

					<div class="card-body">
						<form action="{{ route('post.comment.store', $post)}}" method="post" class="form-horizontal" accept-charset="utf-8">
							{{ csrf_field() }}
							<textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Tambahkan komentar"></textarea>
							<br>
							<input type="submit" value="Komentar" class="btn btn-primary" name="">
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection