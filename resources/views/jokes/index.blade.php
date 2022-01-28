@extends('layout.main_layout')

@section('content')
	<div class="container">
		
		<h1>jokes archive</h1>

		@if (session('delete'))
			<div class="alert alert-success">
				{{ session('delete') }} successfully deleted!
			</div>
		@endif
	
		@forelse ($jokes as $joke)
			<article>
				<h3>
					{{$joke->title}}
				</h3>
				<a href="{{route('jokes.show', $joke->id)}}">Read more</a>
				<a href="{{route('jokes.edit', $joke->id)}}">Edit joke</a>
				{{-- <a href="{{route('jokes.destroy', $joke->id)}}">Edit joke</a>
				 --}}

				 <form action="{{route('jokes.destroy', $joke->id)}}" method="POST">
				@csrf
				@method('DELETE')
					<button class="btn btn-danger" type="submit">DELETE</button>
				</form>

			</article>
		@empty
			<p>
				No joke found yet
			</p>
		@endforelse
			{{$jokes->links()}}
	</div>
@endsection