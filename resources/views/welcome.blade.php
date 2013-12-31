@extends('layout')

@section('content')

    <div class="card bg-dark p-3 shadow-lg rounded">
         @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card-head">
            <h2 class="text-light mb-5">All Courses</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Name of Course</th>
                        <th scope="col">Tutor Email</th>
                        <th scope="col">Number of Children</th>
                        <th scope="col" colspan="2">Edit/Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)

                        <tr>
                            <th scope="row">
                                {{ $course->id }}
                            </th>
                            <td>
                                {{ $course->name }}
                            </td>
                            <td>
                                {{ $course->tutor_email }}
                            </td>
                            <td>
                                {{ $course->children }}
                            </td>
                            <td>
                                <form action="{{ route('courses.destroy',$course->id) }}" method="POST">                                    
                                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-info">Edit</a>
                                    <!-- <a href="/{{ $course->id }}/delete" class="btn btn-danger">Delete</a> -->

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Confirm you want to delete this course')" >Delete</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


@endsection