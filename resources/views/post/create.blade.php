{{-- @extends('adminlte::page') --}}
@extends('layouts.app')

@section('content')
	<div class="container">
		<form class="" action="{{ route('post.store') }}" method="post" accept-charset="utf-8">
			{{ csrf_field() }}
			<div class="form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
				<label for="">Title</label>
				<input type="text" class="form-control" name="title" placeholder="Post title" value="{{ old('title') }}">
				@if($errors->has('title'))
					<span class="help-block">
						<p>{{ $errors->first('title') }}</p>
					</span>
				@endif
			</div>

			<div class="form-group">
				<label for="">Category</label>
				<select name="category_id" id="" class="form-control">
					@foreach ($categories as $category)
					<option value="{{ $category->id }}"> {{ $category->name }} </option>
					@endforeach
				</select>
			</div>

			<div class="form-group has-feedback{{ $errors->has('content') ? ' has-error' : '' }}">
				<label for="">Content</label>
				<textarea name="content" rows="5" class="form-control" placeholder="Post Content">{{ old('content') }} </textarea>
				@if($errors->has('content'))
					<span class="help-block">
						<p>{{ $errors->first('content') }}</p>
					</span>
				@endif
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>
		</form>
	</div>
@endsection