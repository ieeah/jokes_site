@extends('layout.main_layout')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1 class="mb-5">Create a new joke</h1>
            <div class="row">
                <div class="col-12">
                    <form action="{{route('jokes.store')}}" method="POST">
                        @csrf
                       <div class="mt-5">
                           {{-- Author --}}
                            <label for="author" class="form-label">Author</label>
                            <input class="form-control" type="text" id="author" name="author">
                            
                            {{-- Title --}}
                            <label for="title" class="form-label">Title</label>
                            <input class="form-control" type="text" id="title" name="title">

                            {{-- Body --}}
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control" id="body" name="body" rows="6"></textarea>

                            {{-- Submit Button --}}

                            <button type="submit" class="btn btn-primary">
                                Create a new joke!
                            </button>
                            
                       </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
 
