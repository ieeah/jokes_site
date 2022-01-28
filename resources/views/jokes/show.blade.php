@extends ('layout.main_layout')

@section('content')

    <div class="container">
        <h1>{{ $joke->title }}</h1>
    </div>
    
@endsection