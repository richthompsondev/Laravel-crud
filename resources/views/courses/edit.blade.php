@extends('layout')


@section('content')
    <div class=" bg-dark p-3 shadow-lg rounded">
        
        <div class="card-head">
            <h2 class="text-light mb-5">Create Course</h2>
        </div>
        <div class="card-body">

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('courses.update',$course->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name of Course</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $course->name }}">
                </div>
                <div class="form-group">
                    <label for="tutoremail">Tutor's Email</label>
                    <input type="email" name="tutor_email" id="tutor_email" class="form-control" value="{{ $course->tutor_email }}">
                </div>
                <div class="form-group">
                    <label for="nochildren">No of sub posts</label>
                    <input type="number" name="children" id="children" class="form-control" value="{{ $course->children }}">
                </div>
                <div class="input-group">
                    <button class="btn btn-primary" type="submit" name="save" >Update Course</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection