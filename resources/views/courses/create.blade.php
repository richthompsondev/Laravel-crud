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
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name of Course</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tutoremail">Tutor's Email</label>
                    <input type="email" name="tutor_email" id="tutor_email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nochildren">No of sub posts</label>
                    <input type="number" name="children" id="children" class="form-control">
                </div>
                <div class="input-group">
                    <button class="btn btn-primary" type="submit" name="save" >Add Course</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection