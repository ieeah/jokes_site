@extends ('layout.main_layout')

@section('content')

    <div class="container">
        <h1>{{ $joke->title }}</h1>
        <h2>{{ $joke->author }}</h2>

        <p>{{ $joke->body }}</p>

        <a href="{{route('jokes.index')}}">Back to archive</a>
    </div>
    
@endsection