@extends('master')
@section('content')

<h1 class="text-center my-4 text-primary">Relationship -> One to Many</h1>
    <div class="container">
        <div class="card shadow-lg mb-4">
            <div class="card-header bg-info text-white">
                <h4>Posts and Comments Overview</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Post Title</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $post)
                            <tr>
                                <td>
                                    <strong>{{ $post->name }}</strong>
                                    <p class="text-muted">{{ $post->created_at->format('F j, Y') }}</p>
                                </td>
                                <td>
                                    @foreach($post->comments as $comment)
                                        <div class="alert alert-info mt-1 p-2">
                                            <strong>{{ $comment->name }}:</strong> {{ $comment->content }}
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection