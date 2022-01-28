@extends('layout.main_layout')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1 class="mb-5">Edit {{$edit_joke->title}}</h1>
            <div class="row">
                <div class="col-12">
                    <form action="{{route('jokes.update', $edit_joke->id)}}" method="POST">
                        @csrf
                        @method('PATCH')

                       <div class="mt-5">
                           {{-- Author --}}
                            <label for="author" class="form-label">Author</label>
                            <input class="form-control" type="text" id="author" name="author" value="{{$edit_joke->author}}">
                            
                            {{-- Title --}}
                            <label for="title" class="form-label">Title</label>
                            <input class="form-control" type="text" id="title" name="title" value="{{$edit_joke->title}}">

                            {{-- Body --}}
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control" id="body" name="body" rows="6">{{$edit_joke->body}}</textarea>

                            {{-- Submit Button --}}

                            <button type="submit" class="btn btn-primary">
                                Edit joke
                            </button>
                            
                       </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
 
