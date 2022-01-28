@extends('layout.main_layout')

@section('content')
	<div class="container">
		
		<h1>jokes archive</h1>
	
		@forelse ($jokes as $joke)
			<article>
				<h3>
					{{$joke->title}}
				</h3>
			</article>
		@empty
			<p>
				No joke found yet
			</p>
		@endforelse
	
	</div>
@endsection