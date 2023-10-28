@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Quiz List</h1>
    <a href="{{ route('quizzes.create') }}" class="btn btn-success">Create Quiz</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quizzes as $quiz)
            <tr>
                <td>{{ $quiz->title }}</td>
                <td>
                    <a href="{{ route('quizzes.edit', $quiz->id) }}" class="btn btn-primary">Edit</a>
                    <!-- Add a Delete button here if needed -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
